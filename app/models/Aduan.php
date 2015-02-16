<?php

class Aduan extends Eloquent {

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

	public $appends = [
		'status'
	];

	public $fillable = [
		'foto',
		'deskripsi',
		'email_pelapor',
		'nama_pelapor',
		'taman_id',
		'judul',
		'tanggal'
	];

	public static function getDaftaraduan() {
		$orders = static::all();
		return $orders;
	}

	// public static function getStatus() {
	// $orders = DB::table('aduan')
	// ->join ('update','aduan.id','=','update.aduan_id')
	// ->get();
	// 	return $orders;
	// }

	public function getStatusAttribute() {
		$temp = $this->updateTable()->orderBy('waktu','desc');
		// var_dump($temp->orderBy('waktu','desc')->lists('status'));exit;
		if ($temp->pluck('status') == null) return 'UNSOLVED';
		else return $temp->pluck('status');
	}

	public function updateTable() {
		return $this->hasMany('Update');
	}


}
