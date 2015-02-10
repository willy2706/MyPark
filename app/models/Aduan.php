<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class Aduan extends Eloquent implements UserInterface {

	use UserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'aduan';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public $timestamps = false;

	public static function getDaftaraduan() {
		$orders = static::all();
		return $orders;
	}

}
