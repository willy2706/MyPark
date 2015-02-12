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
				<h2><center>Daftar aduan taman</h2> <hr></center>
				
				@foreach($aduan as $da)
				<h3>{{$da->tanggal}} WIB</h3>
				<div class="satuaduan">
					<div class="juduladuan">{{$da->judul}}</div><br>
					<p> Pelapor : {{$da->nama_pelapor}}<br> </p>
					<p> Status : {{$da->status}} <br></p>
				</div>
			</div>
			@endforeach
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