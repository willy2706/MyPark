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
<!-- @if (Session::has('username'))
<div class="top">
	<img class="topimg" src={{asset('assets/images/icon-profile.png')}} alt="logo">this is the top
</div>
<div class="masterbody">
@endif -->
	<div class="header">
		<div>		
			<a href={{Request::is('app/*') ? url('app/admin') : url('/')}} id="logo"><img src={{asset('assets/images/logo.png')}} alt="logo"></a>
			<div>
				<a href={{Request::is('app/*') ? url('app/admin/lapor') : url('/lapor')}}>Lapor keluhan!</a>
				<ul>
					<li>
						<a href={{Request::is('app/*') ? url('app/admin') : url('/')}}>Lihat Daftar Taman</a>
					</li>
					<li>
						<a href={{Request::is('app/*') ? url('app/admin/daftaraduan') : url('/daftaraduan')}}>Lihat Daftar Aduan</a>
					</li>
					@if (Session::has ('username'))
					<li class = "logout">
						<a class = "loginstate" href={{url('app/admin/logout')}}>{{Session::get('username')}}</a>
					</li>

					@elseif (Session::has('admin'))
					{{Session::forget('admin')}}
					<li>
						<a  href={{url('app/admin/login')}}>Login</a>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</div>

	@yield('content')
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	@yield('javascript')
	</script>
</body>