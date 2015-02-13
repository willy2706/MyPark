<?php

class PihakB extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pihakberwenang';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public $timestamps = false;


	public $fillable = [
		'id',
		'nama',
		'alamat',
		'email',
		'no_telp'
	];

	public static function getDaftarpihak() {
		$orders = static::all();
		return $orders;
	}

}
