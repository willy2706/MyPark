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
				
				
				<table>
					<tr>
						<th>Judul</th>
						<th>Status</th>
						<th>Tanggal</th>
					</tr>
					@foreach($aduan as $da)
					<tr>
<!-- 						{{Request::is('app/*') ? url('app/admin') : url('/')}} -->
						<td><a href={{Request::is('app/*') ? url('app/admin/detailaduan/'.$da->id) : url('detailaduan/'.$da->id)}}>{{$da->judul}} </a></td>
						<td>{{$da->status}}</td>
						<td>{{$da->tanggal}} WIB</td>
					</tr>
					@endforeach
				</table>
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