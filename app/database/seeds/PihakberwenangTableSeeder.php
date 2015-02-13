<?php

use Illuminate\Database\Seeder;
class PihakberwenangTableSeeder extends Seeder {
	public function run(){

		$dinas = array(
					['nama' => "Dinas Bina Marga dan Perairan", 'alamat' => "Jl. Cianjur No.34 Bandung", 'no_telp' => "(022) 7278853", 'email' => "dbmp@bandung.go.id"] ,
					['nama' => "Dinas Kebakaran", 'alamat' => "Jl. Sukabumi No.17 Bandung", 'no_telp' => "(022) 7207113", 'email' => "diskar@bandung.go.id"] ,
					['nama' => "Dinas Kebudayaan dan Pariwisata", 'alamat' => "Jl. Ahmad Yani No. 227 Bandung", 'no_telp' => "(022)  7271724", 'email' => "dispar@bandungtourism.com"] ,
				 	['nama' => "Dinas Kependudukan dan Pencatatan Sipil", 'alamat' => "Jl. Ambon No.1 Bandung", 'no_telp' => "(022) 4209891", 'email' => "disdukcapil@bandung.go.id"] ,
				 	['nama' => "Dinas Kesehatan", 'alamat' => "Jl. Supratman No.73 Bandung", 'no_telp' => "(022) 4203752", 'email' => "dinkes@bandung.go.id"] ,
					['nama' => "Dinas Komunikasi dan Informatika", 'alamat' => "Jl. Wastukancana No 2 Bandung", 'no_telp' => "(022) 4234892", 'email' => "diskominfo@bandung.go.id"] ,
					['nama' => "Dinas Koperasi, UKM dan Perindustrian Perdagangan", 'alamat' => "Jl. Kawaluyaan No. 2 Bandung", 'no_telp' => "(022) 7308358", 'email' => "disindag@bandung.go.id"] ,
				 	['nama' => "Dinas Pelayanan Pajak Kota Bandung", 'alamat' => "Jl. Wastukencana No.2 Bandung", 'no_telp' => "(022) 7215323", 'email' => "dispenda@bandung.go.id"] ,
				 	['nama' => "Dinas Pemakaman dan Pertamanan", 'alamat' => "Jl. Ambon No.1 A Bandung", 'no_telp' => "(022) 4231921", 'email' => "distankam@bandung.go.id"] ,
					['nama' => "Dinas Pemuda dan Olah Raga", 'alamat' => "Jl. Aceh No. Bandung", 'no_telp' => "(022) 4212656", 'email' => "dispora@bandung.go.id"] ,
					['nama' => "Dinas Pendidikan", 'alamat' => "Jl.A.Yani No. 239 Bandung", 'no_telp' => "(022)  7106568", 'email' => "disdik@bandung.go.id"] ,
				 	['nama' => "Dinas Pengelolaan Keuangan dan Aset Daerah", 'alamat' => "Jl. Wastukancana No. 2 Bandung", 'no_telp' => "(022) 4204445", 'email' => "dpkad@bandung.go.id"] ,
				 	['nama' => "Dinas Perhubungan", 'alamat' => "Jl. Soekarno Hatta No 205 Bandung", 'no_telp' => "(022) 5220768", 'email' => "dishub@bandung.go.id"] ,
					['nama' => "Dinas Pertanian dan Ketahanan Pangan", 'alamat' => "Jl. Arjuna No.45 Bandung", 'no_telp' => "(022) 6015102", 'email' => "distan@bandung.go.id"] ,
					['nama' => "Dinas Sosial", 'alamat' => "Jl. Sindang sirna no 40 Bandung", 'no_telp' => "(022) 2013139", 'email' => "sosial@bandung.go.id"] ,
				 	['nama' => "Dinas Tata Ruang dan Cipta Karya", 'alamat' => "Jl Cianjur No. 34 Bandung", 'no_telp' => "(022) 7217451", 'email' => "distarcip@bandung.go.id"] ,
				 	['nama' => "Dinas Tenaga Kerja", 'alamat' => "Jl. RE. Martanegara No. 4 Bandung", 'no_telp' => "(022) 7311330", 'email' => "disnaker@bandung.go.id"] ,
				 	['nama' => "Satuan Polisi Pamong Praja", 'alamat' => "Jl. RE. Martanegara No. 4", 'no_telp' => "", 'email' => "satpol.pp@bandung.go.id"] 
				 );

		DB::table('pihakberwenang')->insert($dinas);

	}
}

?>