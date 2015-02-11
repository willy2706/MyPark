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

	public $fillable = [
		'foto',
		'deskripsi',
		'email_pelapor',
		'nama_pelapor',
		'taman_id',
		'tanggal'
	];

	public static function getDaftaraduan() {
		$orders = static::all();
		return $orders;
	}

	public static function getStatus() {
	$orders = DB::table('aduan')
	->join ('update','aduan.id','=','update.aduan_id')
	->get();
		return $orders;

	}
}
