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
					<div class="juduladuan">{{$data->judul}}</div>
					<div class= "lokasiaduan">{{$taman->nama}}, alamat: {{$taman->alamat}}</div><br>

					<!--div class = "gambaraduan"></div><br-->
					<div class="isiaduan">{{$data->deskripsi}}</div>
					<br> <select>
						<!--option value="unsolved">Belum Diperbaiki</option>
						<option value="diterima">Dalam Perbaikan</option-->
						<option value="UNSOLVED">Belum Ditangani</option>
						<option value="IN PROGRESS">Sedang Ditangani</option>
						<option value="INVALID">Tidak Valid</option>
						<option value="SOLVED">Selesai</option>

					</select> <input type="button" value="Simpan Status"> <p></p>

					<table border="0">
					<?php
						$counter = 0;
					?>
					@foreach($instansi as $datainstansi)
					<?php

						if ($counter % 3 == 0) {
							echo "<tr>";
						}
					?>
						<td><input type="checkbox" name="dinas" value="{{$datainstansi->nama}}"> {{$datainstansi->nama}} </td>
					  <?php
					  	if ($counter % 3 == 2){
							echo "</tr>";
					  	}
					  	$counter++;
					  ?>
					@endforeach  
					</table><div align="right"><p></p>
						<input type="button" value="Kirim Pesan"> 

					<p></p>
				</div>

			</div>
		</div>
	</div>
@stop