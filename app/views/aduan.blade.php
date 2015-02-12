@extends('layouts.master')

@section('title')
	Laporan  - Pemerintah Kota
@stop

@section('content')
	<div class="body">
		<div class="aduan">	
			<div class="aduantitle">
				<h1>asdfasdasdf <br></h1>
			</div>
			<hr width="75%">
			<div class="aduanbody">
			<h2>Tanggal Pelaporan : 11111111111111111 <br></h2>
			<h2>Isi Laporan</h2> : 
			<p> adadadadasdadfa 
			asdfasdasdfasdfasdf
			</p>
			</div>
			<div class="aduandinas">
			<h4> Teruskan laporan kepada instansi : </h4>
			<form>
					<table border="0">
					  <tr>
					    <td><input type="checkbox" name="dinas" value="Dinas Keamanan" class="equalsides">Dinas Keamanan</td>
					    <td><input type="checkbox" name="dinas" value="Dinas Kebakaran"class="equalsides">Dinas Kebakaran</td> 
					    <td><input type="checkbox" name="dinas" value="Dinas Bina Marga dan Pengairan" class="equalsides">Dinas Bina Marga dan Pengairan</td>
					  </tr>
					  <tr>
					    <td><input type="checkbox" name="dinas" value="Dinas Kebudayaan dan Pencatatan Sipil" class="equalsides">Dinas Kebudayaan dan Pencatatan Sipil</td>
					    <td><input type="checkbox" name="dinas" value="Dinas Kesehatan" class="equalsides">Dinas Kesehatan</td> 
					    <td><input type="checkbox" name="dinas" value="Dinas Komunikasi dan Informatika" >Dinas Komunikasi dan Informatika</td>
					  </tr>
					</table><div align="right"><p></p>
						<input type="submit" value="Kirim Pesan"> <!-- harusnya ada alert klo diklik -->
					</div>
			</form>

			</div>

		</div>
	</div>
@stop