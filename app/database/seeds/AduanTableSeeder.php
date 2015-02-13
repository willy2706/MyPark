<?php

use Illuminate\Database\Seeder;
class AduanTableSeeder extends Seeder {
	public function run(){
		$aduan = array(
			['deskripsi' => "Authentication improvements when using an HTTP proxy server. This is useful when accessing  WebHDFS via a proxy server.A new Hadoop metrics sink that allows writing directly to Graphite.", 'email_pelapor' => "asdfasfd@asd.asd", 'nama_pelapor' => "nama nama", 'taman_id' => "1", 'tanggal' => "2015-12-12", 'judul' => "Sample aduan"],
			['deskripsi' => "Authentication improvements when using an HTTP proxy server. This is useful when accessing  WebHDFS via a proxy server.A new Hadoop metrics sink that allows writing directly to Graphite.", 'email_pelapor' => "asdfasfd@asd.asd", 'nama_pelapor' => "nama nama", 'taman_id' => "2", 'tanggal' => "2015-12-12", 'judul' => "Sample aduan"],
			['deskripsi' => "Authentication improvements when using an HTTP proxy server. This is useful when accessing  WebHDFS via a proxy server.A new Hadoop metrics sink that allows writing directly to Graphite.", 'email_pelapor' => "asdfasfd@asd.asd", 'nama_pelapor' => "nama nama", 'taman_id' => "1", 'tanggal' => "2015-12-12", 'judul' => "Sample aduan"],
			['deskripsi' => "Authentication improvements when using an HTTP proxy server. This is useful when accessing  WebHDFS via a proxy server.A new Hadoop metrics sink that allows writing directly to Graphite.", 'email_pelapor' => "asdfasfd@asd.asd", 'nama_pelapor' => "nama nama", 'taman_id' => "3", 'tanggal' => "2015-12-12", 'judul' => "Sample aduan"]
			);
		DB::table('aduan')->insert($aduan);
	}

}

?>