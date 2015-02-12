<?php

use Illuminate\Database\Seeder;
class TamanTableSeeder extends Seeder {
	public function run(){
		// DB::table('taman') -> delete();

		$taman = array(
//foto, alamat, nama || public_path().'\\assets\\images\\taman_01.jpg'
			['foto' => url('MyPark/public/assets/images/taman_01.jpg', $parameters = array(), $secure = null), 'alamat' => "Jalan Cisangkuy", 'nama' => "Taman Lansia", 'deskripsi' => "Sebelum menjadi Taman Lansia, taman ini banyak dikenal sebagai Taman Cilaki atau Taman Cisangkuy. Penyebutan taman Lansia mungkin disebabkan oleh banyaknya lansia yang berolahraga di tempat ini, termasuk juga dengan adanya jalan refleksi."],
			['foto' => url('MyPark/public/assets/images/taman_02.jpg', $parameters = array(), $secure = null), 'alamat' => "Jalan Cikapayang", 'nama' => "Taman Jomblo",  'deskripsi' => "Namanya mungkin sedikit menyindir orang yang belum memiliki pasangan. Penamaan taman ini memang sesuai dengan pemanfaatan taman yang kerap digunakan dalam aktivitas berkumpul pemuda dan pemudi Bandung."],
			['foto' => url('MyPark/public/assets/images/taman_03.jpg', $parameters = array(), $secure = null), 'alamat' => "Jalan Belitung", 'nama' => "Taman Musik Centrum", 'deskripsi' => "Sebuah ruang publik yang didedikasikan untuk kegiatan musik, seni dan olah raga. Ini merupakan salah satu taman tematik yang digagas oleh Bapak Ridwan Kamil, Walikota Bandung-melengkapi taman-taman tematik yang lain."],
			['nama' => "Taman Fotografi", 'alamat' => "Jalan Anggrek", 'foto' => url('MyPark/public/assets/images/taman_04.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Taman ini sengaja dibuat sebagai sebuah ruang publik bagi mereka pecinta fotografi. Di taman inilah sering kali diadakan berbagai kegiatan yang berhubungan dengan dunia fotografi. Dibangunnya Taman Fotografi ini sendiri sangat disambut baik oleh komunitas."],
			['nama' => "Taman Pustaka Bunga", 'alamat' => "Jalan Cisangkuy", 'foto' => url('MyPark/public/assets/images/taman_05.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Citra Bandung sebagai Kota Kembang semakin mengena setelah munculnya Taman Pustaka Bunga. Taman bunga dulunya bernama Taman Cilaki dan kurang terawat. Namun kini kita bisa menjumpai ribuan bunga dengan aneka jenis menghiasai taman ini."],
			['nama' => "Taman Persib", 'alamat' => "Jalan Supratman", 'foto' => url('MyPark/public/assets/images/taman_06.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Kota Bandung tidak bisa dilepaskan dari tim sepakbola Persib Bandung. Tim yang berjuluk 'Maung Bandung' itu begitu disanjung para fans fanatiknya. Di dalamnya ada lapangan sepakbola dan museum terbuka yang bertemakan Persib Bandung. "],
			['nama' => "Taman Film", 'alamat' => "Kompleks Taman Pasupati", 'foto' => url('MyPark/public/assets/images/taman_07.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Menurut Kepala Dinas Pemakaman dan Pertamanan (Diskamtam) Kota Bandung Arief Prasetya, taman ini dibentuk menjadi bangunan amphiteater dengan fondasi tempat duduk yang berkelok-kelok."], 
			['nama' => "Taman Vanda", 'alamat' => "Jalan Merdeka Bawah", 'foto' => url('MyPark/public/assets/images/taman_08.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Taman ini dilengkapi dengan air mancur. Rencananya akan dipercantik dengan ornamen patung dari pihak ketiga melalui dana CSR-nya. Nama 'Vanda' sendiri diambil dari salah satu nama jenis anggrek."],
			['nama' => "Taman Babakan Siliwangi", 'alamat' => "Jalan Tamansari", 'foto' => url('MyPark/public/assets/images/taman_09.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Baksil yang merupakan kependekan dari Babakan Siliwangi ini sudah sangat akrab ditelinga masyarakat Kota Kembang yang mana biasanya mereka selalu mengunjungi kawasan menarik ini ketika akhir pekan atau musim liburan tiba."],
			['nama' => "Taman Sukajadi", 'alamat' => "Jalan Sukajadi", 'foto' => url('MyPark/public/assets/images/taman_10.jpg', $parameters = array(), $secure = null), 'deskripsi' => " Taman Sukajadi ini merupakan perpaduan antara pohon pelindung dengan tanaman hias yang di dominasi bunga bakung merah (Amarilis), Lili Kuning, Spider Lili dan Soka Hawai yang low maintenance, dilengkapi kolam air mancur, therapy stones."],
			['nama' => "Taman Pramuka", 'alamat' => "Jalan R.E. Martadinata/Riau", 'foto' => url('MyPark/public/assets/images/taman_11.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Taman Pramuka (Oranje Nassau Plein) atau lebih dikenal dengan nama Oranjee plein (tahun 1950-an) dinamai Lapangan Dipati Ukur, sekarang Taman pramuka terletak di Riouwstraat (tahun 1950-an) menjadi Jln. Riau dan sekarang menjadi Jln. L.L.R.E. Martadinata."],
			['nama' => "Taman Tegallega/Bandung Lautan Api", 'alamat' => "Jalan Otto Iskandardinata", 'foto' => url('MyPark/public/assets/images/taman_12.jpg', $parameters = array(), $secure = null), 'deskripsi' => "Banyak sekali aktivitas yang dilakukan oleh masyarakat di taman ini. Kebanyakan taman ini dijadikan tempat olahraga. Bahkan tak jarang pula dijadikan tempat konser, sehingga taman tegalega juga bisa menjadi salah satu tempat wisata malam di bandung."],
			['nama' => "Taman Lalu Lintas", 'alamat' => "-", 'foto' => url('MyPark/public/assets/images/taman_13.jpg', $parameters = array(), $secure = null), 'deskripsi' => ""
			],
			['nama' => "Taman Arcamanik", 'alamat' => "-", 'foto' => url('MyPark/public/assets/images/taman_14.jpg', $parameters = array(), $secure = null), 'deskripsi' => ""
			],
			['nama' => "Taman Tongkeng/Anak", 'alamat' => "-", 'foto' => url('MyPark/public/assets/images/taman_15.jpg', $parameters = array(), $secure = null), 'deskripsi' => ""
			],
			['nama' => "Taman Dewi Sartika/Sejarah", 'alamat' => "-", 'foto' => url('MyPark/public/assets/images/taman_16.jpg', $parameters = array(), $secure = null), 'deskripsi' => ""
			]






			//,
			// ['nama' => "", 'alamat' => "-", 'foto' => url('MyPark/public/assets/images/taman_.jpg', $parameters = array(), $secure = null), 'deskripsi' => ""
			// ]
		
			);

		DB::table('taman')->insert($taman);

	}
}

?>
