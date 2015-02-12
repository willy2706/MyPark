<?php

use Illuminate\Database\Seeder;
class TamanTableSeeder extends Seeder {
	public function run(){
		DB::table('taman') -> delete();

		$taman = array(
//foto, alamat, nama || public_path().'\\assets\\images\\taman_01.jpg'
			['foto' => url('MyPark/public/assets/images/taman_01.jpg', $parameters = array(), $secure = null), 'alamat' => "Jalan Cisangkuy", 'nama' => "Taman Lansia", 'deskripsi' => "Sebelum menjadi Taman Lansia, taman ini banyak dikenal sebagai Taman Cilaki atau Taman Cisangkuy. Penyebutan taman Lansia mungkin disebabkan oleh banyaknya lansia yang berolahraga di tempat ini, termasuk juga dengan adanya jalan refleksi."],
			['foto' => "urlhere2", 'alamat' => "Jalan Cikapayang", 'nama' => "Taman Jomblo",  'deskripsi' => "Namanya mungkin sedikit menyindir orang yang belum memiliki pasangan. Penamaan taman ini memang sesuai dengan pemanfaatan taman yang kerap digunakan dalam aktivitas berkumpul pemuda dan pemudi Bandung."],
			['foto' => "urlhere3", 'alamat' => "Jalan Belitung", 'nama' => "Taman Musik Centrum", 'deskripsi' => "Sebuah ruang publik yang didedikasikan untuk kegiatan musik, seni dan olah raga. Ini merupakan salah satu taman tematik yang digagas oleh Bapak Ridwan Kamil, Walikota Bandung-melengkapi taman-taman tematik yang lain."],
			['nama' => "Taman Fotografi", 'alamat' => "-", 'foto' => "", 'deskripsi' => "Taman ini sengaja dibuat sebagai sebuah ruang publik bagi mereka pecinta fotografi. Di taman inilah sering kali diadakan berbagai kegiatan yang berhubungan dengan dunia fotografi. Dibangunnya Taman Fotografi ini sendiri sangat disambut baik oleh komunitas."
			],
			['nama' => "Taman Pustaka Bunga", 'alamat' => "Jalan Cisangkuy", 'foto' => "", 'deskripsi' => "Citra Bandung sebagai Kota Kembang semakin mengena setelah munculnya Taman Pustaka Bunga. Taman bunga dulunya bernama Taman Cilaki dan kurang terawat. Namun kini kita bisa menjumpai ribuan bunga dengan aneka jenis menghiasai taman ini."
			],
			['nama' => "Taman Persib", 'alamat' => "Jalan Supratman", 'foto' => "", 'deskripsi' => "Kota Bandung tidak bisa dilepaskan dari tim sepakbola Persib Bandung. Tim yang berjuluk 'Maung Bandung' itu begitu disanjung para fans fanatiknya. Di dalamnya ada lapangan sepakbola dan museum terbuka yang bertemakan Persib Bandung. "
			]
			// ['nama' => "", 'alamat' => "-", 'foto' => "", 'deskripsi' => ""
			// ]
		
			);

		DB::table('taman')->insert($taman);

	}
}

?>
