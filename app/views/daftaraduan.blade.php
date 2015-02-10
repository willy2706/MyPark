@extends('layouts.master')

@section('title')
	Home - Pemerintah Kota
@stop

@section('content')
	{{ Form::open(array('files'=>true, 'method'=>'post', 'class'=>'form-horizontal')) }}
	<!-- <div class="body">
		<div class="loginbg">
			<label>Username: </label>
			<input name="username" type="text"><br><p></p>

			<label>Password : </label>
			<input name="password" type="password"><br><p></p>

			<button type="submit" class="datbut">Login</button> 
		</div>
	</div> -->
@stop