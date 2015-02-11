<?php

use Illuminate\Database\Seeder;
class TamanTableSeeder extends Seeder {
	public function run(){
		DB::table('taman') -> delete();

		$taman = array(
//foto, alamat, nama
			['foto' => "urlhere", 'alamat' => "", 'nama' => "Taman Lansia"],
			['foto' => "urlhere2", 'alamat' => "", 'nama' => "Taman Jomblo"],
			['foto' => "urlhere3", 'alamat' => "", 'nama' => "Taman Musik Centrum"]
			);

		DB::table('taman')->insert($taman);
	}
}

?>
