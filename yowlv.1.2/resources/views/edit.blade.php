<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


   
    <meta charset="utf-8">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://codeglamour.com/php/iprofile/uploads/images/thumbnail/f644dd616eab94f984c821e9090358f9_thumb.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/profil.css') ?>" type="text/css">

    


    <title>YOWL</title>

</head>

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
                <li class="active">Accueil</a></li>
                <li><a href="{{ url('/ctg') }}">Catégories</a></li>
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
</header>


<body>



<div class="profile">
<div class="content">
<div class="back"></div>
<div class="profilePic"></div>
<form method="post" action="{{route('users.update', $user ?? '')}}">

  <h4> {{Auth::user()->name}} <h4>
    

<div class="rates">
<div class="box boxview">
<div class="iconCon">
<svg class="icon icon-eye"><use xlink:href="#icon-eye"></use></svg>
</div>

</div>
</div>
</div>
</div>
</body>
</body>

    </html>

