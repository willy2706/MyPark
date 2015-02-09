<?php

class AdminController extends BaseController {

	public function getIndex() {
		Session::put('alert');
		return View::make('index');//->with('alert', true);
	}

	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$input = Input::all();
		if (Auth::attempt(Input::only('username', 'password'))) {
			return Response::json(Auth::user());
		} else {
			return Redirect::back();
		}
	}
}