<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo asset('css/welcome.css') ?>" type="text/css">

  <title>YOWL</title>

</head>

<body>
  <div class="wrapper">
    <div class="Container">
      <div class="header">
        <h1>L'avenir est radieux, l'avenir est le monde des avis.</h1>
        <p>YOWL</p>
        <span> <a href="{{ url('/yowl') }}" class="btn">VOIR LES AVIS</a> OU
          @if (Route::has('login'))
          @auth
          <a href="{{ url('/yowl') }}" class="btn">REJOIGNEZ-NOUS</a> </span>
        @else
        <a href="{{ url('/register') }}" class="btn">REJOIGNEZ-NOUS</a> </span>
        @endif
        @endif
      </div>
    </div>
  </div>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
