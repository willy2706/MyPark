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
		return Redirect::to('/')->withalert('aduan telah disubmit');
	}

	public function getDaftaraduan() {
		$daftaraduan = Aduan::getDaftaraduan();
		return View::make('daftaraduan')->withdaftaraduan($daftaraduan);
	}
}