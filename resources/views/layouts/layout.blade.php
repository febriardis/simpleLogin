<!DOCTYPE html>
<html>
	<head>
		<title>Simpe-Login | @yield('title')</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="/bootstrap//css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      	<a class="navbar-brand" href="#">Simple-Login</a>
			    </div>
			    <ul class="nav navbar-nav">
			      	<li class="active"><a href="#">Home</a></li>
			      	<li><a href="#">Page 1</a></li>
			      	<li><a href="#">Page 2</a></li>
			    </ul>

			    <ul class="nav navbar-nav navbar-right">
			    @guest
			      	<li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			    	<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			   	@else
				    <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->username }}
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          	<li><a href="#">Setting</a></li>
				    	    <li><a href="{{url('/keluar')}}">Logout</a></li>
				        </ul>
				    </li>
			    @endguest
			    </ul>
		  	</div>
		</nav>

		<div class="container">
			@yield('content')
		</div>
	</body>
</html>