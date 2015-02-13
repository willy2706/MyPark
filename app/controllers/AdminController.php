<?php

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
}