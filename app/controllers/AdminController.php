<?php

class AdminController extends BaseController {

	public function getIndex() {
		// return Response::json('ok');
		Session::put('admin', true);
		return View::make('index');//->with('admin', true);
	}

	public function getLogin() {
		Session::put('admin', true);
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