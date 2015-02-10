<?php

class TamanController extends BaseController {

	public function getIndex() {
		return View::make('index');//->with('alert', true);
	}

	public function getLapor() {
		return View::make('lapor');
	}

	public function postLapor() {
		return Response::json(Input::all());
	}
}