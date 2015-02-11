<?php
use Carbon\Carbon;
class TamanController extends BaseController {

	public function getIndex() {
		return View::make('index');//->with('alert', true);
	}

	public function getLapor() {
		return View::make('lapor');
	}

	public function postLapor() {
		$file = Input::file('foto');
		$filename = 'aduan_'.time().'.'.$file->getClientOriginalExtension();
		$file->move(public_path().'/aduan', $filename);
		
		$aduan = new Aduan;
		$aduan->fill(Input::all());
		$aduan->foto = $filename;
		$aduan->tanggal = Carbon::now();
		$aduan->save();
      
      Mail::send('emails.notifikasi_terima_aduan', array('nama'=>Input::get('nama_pelapor')), function($message){
        $message->to(Input::get('email_pelapor'), Input::get('nama_pelapor'))
                ->subject('Notifikasi Penerimaan Aduan dari Taman Bandung');
      });
      
		return Redirect::to('/')->withalert('aduan telah disubmit');
	}

	public function getDaftaraduan() {
		$daftaraduan = Aduan::getDaftaraduan();
		$ivana = Aduan::getStatus();
		return View::make('daftaraduan')->withaduan($daftaraduan)->withivana($ivana);
	}
}