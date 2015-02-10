@extends ('layouts.master')
@section ('title')
	Laporan Pengaduan - Pemerintah Kota Bandung
@stop

@section ('content')
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
				<!--h2>Send Us A Message</h2>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p-->
				{{ Form::open(array('files'=>true, 'method'=>'post', 'class'=>'form-horizontal')) }}
					<label for="fname">* Nama
						<input name = "nama_pelapor" type="text" id="fname" required>
					</label>
<!-- 					<label for="subject">* Topik
						<input name = "" type="text" id="subject" required>
					</label> -->
					<label for="email">* E-mail
						<input name = "email_pelapor" type="text" id="email" required>
					</label>
					<label for="email2">* E-mail (ulangi)
						<input name="email_pelapor_confirmation" type="text" id="email2" required>
					</label><br>
					<label for="email">Foto kondisi taman
					<input type="text" width="400" class="#" style="margin:0;"> 
					<button>Cari Foto</button>
					</label> <p></p>
					<label for="taman">* Nama taman <br>
						<select>
						  <option value="tmn1">Taman Pasupati / Jomblo</option>
						  <option value="tmn2">Taman Lansia / Cisangkuy</option>
						  <option value="tmn3">Taman Musik Centrum</option>
						  <option value="tmn4">Taman Fotografi</option>
						</select>
					</label><br><p></p>
					
					<label for="message" class="message">* Keluhan</label>
					<textarea name="deskripsi" id="message" cols="30" rows="10" required></textarea>
					<input type="submit" value="" class="submitaduan">
			</div>
		</div>
	</div>
@stop