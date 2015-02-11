<?php

use Illuminate\Database\Seeder;
class TamanTableSeeder extends Seeder {
	public function run(){
		DB::table('taman') -> delete();

		$taman = array(
//foto, alamat, nama
			['foto' => "urlhere", 'alamat' => "Jalan Cisangkuy", 'nama' => "Taman Lansia", 'deskripsi' => "Sebelum menjadi Taman Lansia, taman ini banyak dikenal sebagai Taman Cilaki atau Taman Cisangkuy."],
			['foto' => "urlhere2", 'alamat' => "Jalan Cikapayang", 'nama' => "Taman Jomblo",  'deskripsi' => "Namanya mungkin sedikit menyindir orang yang belum memiliki pasangan. Penamaan taman ini memang sesuai dengan pemanfaatan taman yang kerap digunakan dalam aktivitas berkumpul pemuda dan pemudi Bandung. "],
			['foto' => "urlhere3", 'alamat' => "Jalan Belitung", 'nama' => "Taman Musik Centrum", 'deskripsi' => "Sebuah ruang publik yang didedikasikan untuk kegiatan musik, seni dan olah raga. Ini merupakan salah satu taman tematik yang digagas oleh Bapak Ridwan Kamil, Walikota Bandung-melengkapi taman-taman tematik yang lain seperti Taman Pustaka Bunga, Taman Jombo, Taman Fotografi (Taman Cempaka) dan yang lainnya."]
			);

		DB::table('taman')->insert($taman);

	}
}

?>
