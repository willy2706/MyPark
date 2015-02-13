<?php
use Carbon\Carbon;
class TamanController extends BaseController {

	public function getIndex() {
		//return View::make('index');//->with('alert', true);

		$daftartaman = Taman::getDaftartaman();
		return View::make('index')->withdaftartaman($daftartaman);
	}

	public function getLapor() {
		return View::make('lapor');
	}

	public function postLapor() {
		$input = Input::all();

		$file = Input::file('foto');
		$filename = null;
		if ($file != null){
			$filename = 'aduan_'.time().'.'.$file->getClientOriginalExtension();
			$file->move(public_path().'/aduan', $filename);
		}

		$aduan = new Aduan;
		$aduan->fill($input);
		$aduan->foto = $filename;
		$aduan->tanggal = Carbon::now();
		// return Response::json($aduan);
		$aduan->save();
      
		Mail::send('emails.notifikasi_terima_aduan', array('nama'=>Input::get('nama_pelapor')), function($message){
			$message->to(Input::get('email_pelapor'), Input::get('nama_pelapor'))
				->subject('Notifikasi Penerimaan Aduan dari Taman Bandung');
		});
      
		return Redirect::to('/')->withalert('aduan telah disubmit');
	}

	public function getDaftaraduan() {
		$daftaraduan = Aduan::getDaftaraduan();
		return View::make('daftaraduan')->withaduan($daftaraduan);
	}

	public function getAduan(){
		$aduan = Aduan::getDaftaraduan();
		return View::make('aduan')->withaduan($aduan);//->withdaftardinas($daftardinas);
	}

	public function getDetailaduan($id){
		$input = Input::all(); 
		$instance = Aduan::find($id);
		$taman = Taman::find(Aduan::find($id)->taman_id);
		return View::make('detailaduan')->withdata($instance)->withtaman($taman);//->withdaftardinas($daftardinas);
	}

}