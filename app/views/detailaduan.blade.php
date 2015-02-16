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
					<div type="hidden" id= "aduan">{{$data->id}}</div>
					<div class="juduladuan">{{$data->judul}}</div>
					<div class= "lokasiaduan">{{$taman->nama}}, alamat: {{$taman->alamat}}</div><br>
					<div class="isiaduan">{{$data->deskripsi}}</div>
					<br> 
					{{Form::select('options', array('UNSOLVED' => 'Belum Ditangani', 'IN PROGRESS' => 'Sedang Ditangani', 'INVALID' => 'Tidak Valid', 'SOLVED' => 'Selesai'), $data->status, array('id' => 'options'))}}
					<!-- 
					<select id="options">
						<option value="UNSOLVED">Belum Ditangani</option>
						<option value="IN PROGRESS">Sedang Ditangani</option>
						<option value="INVALID">Tidak Valid</option>
						<option value="SOLVED">Selesai</option>
					</select>  -->
					<input id="simpanstatus" type="button" value="Simpan Status">
					{{ Form::open(array('method'=>'post')) }}
						{{ Form::hidden('id_aduan', $data->id) }}
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
							<td>{{Form::checkbox('dinas[]', $datainstansi->id);}} {{$datainstansi->nama}} </td>
						  <?php
						  	if ($counter % 3 == 2){
								echo "</tr>";
						  	}
						  	$counter++;
						  ?>
						@endforeach  
							</table>
						<div align="right"><p></p>
							<input type="submit" value="Kirim Pesan">
						<p></p>
					{{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('javascript')
$(document).ready(function() {
    $("#simpanstatus").click(function(){
    	var options = $('#options').val();
    	var id = ($('#aduan')[0]).innerHTML;
    	var host = window.location.host;
		$.ajax({
		    type: 'post',
		    url: 'http://'+host+'/MyPark/public/app/admin/updatestatus/'+id+'?status='+options,
		    beforeSend: function(request) {
		        return request.setRequestHeader('X-CSRF-Token', $("meta[name='token']").attr('content'));
		    },
		    success: function(data) {
		    	alert(data);
		    },
		    error: function(data) {
		    	alert(data);
		    }
		});
    });
});
@stop