<?php

class AdminController extends BaseController {

	public function getIndex() {
		Session::put('admin', true);
		if (Auth::check()) {
			Session::put('username',Auth::user()->username);
			return View::make('index');
		} else 
			return View::make('index');
	}

	public function getLogin() {
		// var_dump(Auth:: check());exit;
		Session::put('admin', true);
		return View::make('login');
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
}