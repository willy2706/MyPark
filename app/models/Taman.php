<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class Taman extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'taman';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public $timestamps = false;

	public $fillable = [
		'id',
		'foto',
		'deskripsi',
		'nama'
	];

	public static function getDaftartaman(){
		$orders = Taman::all();
		return $orders;
	}


}
