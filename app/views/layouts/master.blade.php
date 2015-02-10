<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title')
	</title>
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	@if(Session::has('alert')) {
		echo "true";
	}
	@endif
<div class="top">
	<img class="topimg" src={{asset('assets/images/icon-profile.png')}} alt="logo"> this is the top
</div>
<div class="masterbody">
	<div class="header">
		<div>
			<a href={{url('/')}} id="logo"><img src={{asset('assets/images/logo.png')}} alt="logo"></a>
			<div>
				<a href={{url("lapor")}}>Lapor keluhan!</a>
				<ul>
					<li class="selected">
						<a href="index.html">Lihat Daftar Taman</a>
					</li>
					<li>
						<a href="daftaraduan.html">Lihat Daftar Aduan</a>
					</li>

					@if (Session::has('admin'))
					{{Session::forget('admin')}}
					<li>
						<a href={{url('app/admin/login')}}>Login</a>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
	@yield('content')
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	</div>
</body>