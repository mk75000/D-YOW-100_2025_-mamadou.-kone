<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/ctg.css') ?>" type="text/css">

    <title>YOWL</title>

</head>
<body>
<header>
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
                <li class="active"><a href="{{ url('/ctg') }}">Catégories</a></li>
                



            
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li>
                @if (Route::has('login'))
                @auth
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('ad.create') }}">Je rédige un avis</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf

                      
                        </a>



                        @else
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Rejoignez-nous</a>
                        @endif
                        @endif


                        </li>
            </ul>
        </nav>

    </div>
</header>


<div class="error-image">
  <h1>👨‍🔧</h1>
</div>
<div class="error-msg-container">
 <span> <h1>OUPS ! </h1>
  <p>Notre équipe travail actuellement sur cette page pour rétablir le soucis dans les plus bref délais.</p>
  
</div>
</body>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>