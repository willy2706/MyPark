<?php

class TamanController extends BaseController {

	public function getIndex() {
		return View::make('index');//->with('alert', true);
	}

	public function getLapor() {
		return View::make('lapor');
	}

	public function postLapor() {
      /*TODO : melakukan email jika laporan valid*/
      Mail::send('emails.notifikasi_terima_aduan', array('nama'=>Input::get('nama_pelapor')), function($message){
        $message->to(Input::get('email_pelapor'), Input::get('nama_pelapor'))
                ->subject('Notifikasi Penerimaan Aduan dari Taman Bandung');
      });
		return Response::json(Input::all());
	}

	public function getDaftaraduan() {
		$daftaraduan = Aduan::getDaftaraduan();
		return View::make('daftaraduan')->withdaftaraduan($daftaraduan);
	}
}