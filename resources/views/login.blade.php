@extends('layouts.layout')

@section('title')
	Login
@endsection

@section('content')
	<div class="container">
		<div class="panel panel-default" style="width: 50%; margin: 50px auto">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-user"></span> Login
				@if(Session::has('message'))
					<span class="label label-danger">{{ Session::get('message') }} </span>
				@endif
			</div>

			<div class="panel-body">
				<form method="POST" action="/loginpost">
					@csrf
					<div class="form-group"> 
						Username: 
						<input type="text" name="username" class="form-control" placeholder="Enter Username" required="" autofocus="">
					</div>
					<div class="form-group"> 
						Password: 
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
					</div>

					<div class="form-group"> 
						<input type="submit" value="Login" class="btn btn-primary">
						<a href="#">Forgot Password?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection