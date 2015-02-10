<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::get('/', function() {
// 	return Redirect::to('app/admin');
// });
// Route::group(['before' => 'admin'], function() {
	Route::group(array('prefix' => 'app/admin'), function() {
		Route::controller('/','AdminController');
	});
// });
Route::controller('/', 'TamanController');
