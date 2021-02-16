<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo asset('css/contact.css') ?>" type="text/css">

	<title>YOWL</title>

</head>

<div class="header">
	<div class="logo">
		<p>Y<span>O</span>W<span>L</span></p>
	</div>
	<div id="flip">
		<p>Menu</p>
	</div>
	<nav id="nav">
		<ul>
			<li><a href="{{ url('/yowl') }}">Accueil</a></li>
			<li><a href="{{ url('/ctg') }}">Catégories</a></li>


			<li class="active"><a href="{{ url('/contact') }}">Contact</a></li>

			<li>
				@if (Route::has('login'))
				@auth
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }}
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('ad.create') }}">Je rédige un avis</a>



					@else
					<a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Rejoignez-nous</a>
					@endif
					@endif


			</li>
		</ul>
	</nav>
</div>
<br>



<body>
	<div class="dernier">
		<h1> CONTACT SAV </h1>
	</div>


	<div class="container mt-5">
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{Session::get('success')}}
		</div>
		@endif

		<form method="post" action="{{ route('contact.store') }}">

			@csrf

			<div class="form-group">


				<input type="text" placeholder="Nom d'utilisateur" class="form-control" name="name" id="name">

				@if ($errors->has('name'))
				<div class="error">
					{{ $errors->first('name') }}
				</div>
				@endif
			</div>

			<div class="form-group">

				<input type="email" placeholder="Adresse mail" class="form-control" name="email" id="email">

				@if ($errors->has('email'))
				<div class="error">
					{{ $errors->first('email') }}
				</div>
				@endif
			</div>


			<div class="form-group">

				<textarea class="form-control" placeholder="TAPEZ VOTRE MESSAGE ICI.." name="message" id="message" rows="4"></textarea>

				@if ($errors->has('message'))
				<div class="error">
					{{ $errors->first('message') }}
				</div>
				@endif

			</div>

			<input type="submit" name="send" value="ENVOI DU MESSAGE" class="btn btn-dark btn-block">
		</form>
	</div>

</body>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>