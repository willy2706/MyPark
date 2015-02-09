<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Home - Pemerintah Kota</title>
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.html" id="logo"><img src="images/logo.png" alt="logo"></a>
			<div>
				<a href="lapor.html">Lapor keluhan!</a>
				<ul>
					<li class="selected">
						<a href="index.html">Lihat Daftar Taman</a>
					</li>
					<li>
						<a href="daftaraduan.html">Lihat Daftar Aduan</a>
					</li>
					<li>
						<a href="login.html">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	@yield('content')
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>