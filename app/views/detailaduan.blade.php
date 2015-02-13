@extends('layouts.master')

@section('title')
	Home - Pemerintah Kota
@stop

@section('content')
	<div class="body">
		<div class="contact">
			<div>
				<h2></h2>
				<div>
					<h4>Kontak kami</h4>
					<p>
						Untuk mengontak Dinas Pemakaman dan Pertamanan dapat melalui media komunikasi berikut.
					</p>
					<ul>
						<li class="phone-num">
							022-4231921
						</li>
						<li class="email">
							<a href="#">distankam@bandung.go.id</a>
						</li>
						<li class="address">
							Jl. Ambon No.1 A <br> Bandung, Jawa Barat
						</li>
					</ul>
				</div>
			</div>
			<div>
				<h2><center>Daftar aduan taman</center> <hr> </h2> 
				
				<h3>26-01-2015</h3>
				<div class="satuaduan">
					<div class="juduladuan">ini judul aduan</div>
					<div class= "lokasiaduan">ini lokasi aduan</div><br>

					<!--div class = "gambaraduan"></div><br-->
					<div class="isiaduan">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>
					<br> <select>
						<!--option value="unsolved">Belum Diperbaiki</option>
						<option value="diterima">Dalam Perbaikan</option-->
						<option value="solved">Selesai</option>
						<option value="notsolved">Tidak Dikerjakan</option>
					</select> <input type="button" value="Simpan Status"> <p></p>
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
						<input type="button" value="Kirim Pesan"> 

					<p></p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="footer">
	
		<div>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="programs.html">Our Programs</a>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
			</ul>
			<p>
				&#169; 2023 World Tree Preservation. All Rights Reserved
			</p>
		</div>
	</div>
@stop