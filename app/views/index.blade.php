@extends('layouts.master')

@section('title')
	Daftar Taman - Pemerintah Kota Bandung
@stop

<!-- @section('content')
	<div class="body">
		<div class="home">
			<div class="featured">
				<div>
					<p>
						Hargai taman Kota Bandung. <br>Laporkan keluhan anda <br>untuk taman-taman di Bandung!
					</p>
					<h2>Karena kita yang harus menjaga <br><br>kota kita sendiri <br><br> <span>#TamanKotaBandung</span></h2>
				</div>
			</div>
			<?php 
				$counter = 0;
			?>
			@foreach ($daftartaman as $taman)
			<?php
				if ($counter % 2 == 0){
					echo "<div class=\"section\">";
				}
			?>
			
				<div>
					<div>
						<a href = "#"><img src="{{$taman->foto}}" alt="" class="indeximg"></a>
							<h2>{{$taman->nama}} <br></h2>
							<p>
								<b>Letak</b> : {{$taman->alamat}} <br>
								<b>Deskripsi</b> : {{$taman->deskripsi}}
							</p>
					</div>
				</div>	

			<?php
			if ($counter % 2 != 0){
				echo "</div>";
			}
			$counter++;
			?>

			@endforeach
				
			
		</div>
	</div>
@stop -->