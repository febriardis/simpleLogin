@extends('layouts.layout')

@section('title')
	Daftar
@endsection

@section('content')
	<div class="container">
		<div class="panel panel-default" style="width: 50%; margin: 50px auto">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-user"></span> Register
				@if(Session::has('message'))
					<span class="label label-danger">{{ Session::get('message') }} </span>
				@endif
			</div>

			<div class="panel-body ">
				<form method="POST" action="/create">
					@csrf
					<div class="form-group"> 
						Username: <br>
						<span class="text-danger">{{ $errors->first('username')}}</span> 				
						<input type="text" name="username" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group"> 
						Password: <br>
						<span class="text-danger">{{ $errors->first('password')}}</span> 
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
						<span class="help-block"><i>Kombinasi huruf besar, huruf kecil dan angka, minimal 6 character.</i></span>
					</div>
					<div class="form-group"> 
						Password Confirmation:<br>
						<span class="text-danger">{{ $errors->first('password')}}</span> 
						<input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password" >
					</div>

					<div class="form-group"> 
						<input type="submit" value="Daftar" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection