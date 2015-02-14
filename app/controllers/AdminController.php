<?php
use Carbon\Carbon;
class AdminController extends BaseController {

	public function getIndex() {
		$daftartaman = Taman::getDaftartaman();
		// var_dump(Auth::check());exit;
		if (Auth::check()) {
			Auth::login(Auth::user(), true);
			Session::put('username',Auth::user()->username);
			return View::make('index')->withdaftartaman($daftartaman);
		} else 
				// return Response::json('okok');
			return View::make('index')->withdaftartaman($daftartaman);
	}

	public function getLapor() {
		$controller = new TamanController;
		return $controller->getLapor();
	}

	public function postLapor() {
		// var_dump(Auth::check());exit;
		$controller = new TamanController;
		return $controller->postLapor();
	}

	public function getDaftaraduan() {
		$controller = new TamanController;
		return $controller->getDaftaraduan();
	}

	public function getDetailaduan($id) {
		$controller = new TamanController;
		return $controller->getDetailaduan($id);
	}

	public function getLogin() {
		if (Auth::check()) {
			return Redirect::intended('/app/admin');
		} else {
			Session::put('admin', true);
			return View::make('login');
		}
	}

	public function postLogin() {
		$input = Input::all();
		if (Auth::attempt(Input::only('username', 'password'))) {
			// var_dump(Auth:: check());exit;
			return Redirect::intended('app/admin')->withusername(Auth::user()->username);
		} else {
			return Redirect::back();
		}
	}

	public function getLogout() {
		// return Response::json('logout');
		Auth::logout();
		Session::flush();
		return Redirect::to('app/admin');
	}

	public function postUpdatestatus($aduan_id) {
		try {
			$input = Input::all();
			$update = new Update;
			$update->status = $input['status'];
			$update->waktu = Carbon::now();
			$update->admin_id = Auth::user()->id;
			$update->aduan_id = $aduan_id;
			$update->save();

			$aduan = Aduan::find($aduan_id);
			Mail::send('emails.notifikasi_ubah_status', array('nama'=> $aduan->nama_pelapor, 'update' => $update), function($message) use($aduan) {
				$message->to($aduan->email_pelapor, $aduan->nama_pelapor)
					->subject('Notifikasi Perubahan Status Aduan');
			});	

			return Response::json("data berhasil disimpan");
		} catch (Exception $ex) {
			return Response::json("data gagal disimpan");
		}
	}

	public function postDetailaduan(){
		$input = Input::all();
		$aduan = Aduan::find($input['id_aduan']);
		$taman = Taman::find($aduan->taman_id);
		$dinas = $input['dinas'];
		$N = count($dinas);
		for($i=0; $i< $N; $i++){
			$dinas_terkait = PihakB::find($dinas[$i]);
			Mail::send('emails.laporan_kepada_dinas', array('dinas_terkait'=> $dinas_terkait, 'aduan' => $aduan, 'taman' => $taman), function($message) use ($dinas_terkait){
				$message->to($dinas_terkait->email, $dinas_terkait->nama)
					->subject('Laporan Aduan Masyarakat Terkait Taman Bandung');
			});
		}
		return Redirect::to('app/admin')->withalert('Email telah dikirimkan');
	}
}