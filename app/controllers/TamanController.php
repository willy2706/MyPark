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
      Mail::send('emails.notifikasi_terima_aduan', array('nama'=>Input::get('fname')), function($message){
        $message->to(Input::get('email'), Input::get('fname'))
                ->subject('Notifikasi Penerimaan Aduan dari Taman Bandung');
      });
		return Response::json(Input::all());
	}

	public function getDaftaraduan() {
		$daftaraduan = Aduan::getDaftaraduan();
		return View::make('daftaraduan')->withdaftaraduan($daftaraduan);
	}
}