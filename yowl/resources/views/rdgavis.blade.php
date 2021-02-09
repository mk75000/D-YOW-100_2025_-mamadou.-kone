<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/rdgavis.css')?>" type="text/css"> 

        <title>YOWL</title>

    </head>

    <header>
    <div class="header">
		<div class="logo">
			<p>Y<span>O</span>W<span>L</span></p>
		</div>
		<div id="flip"><p>Menu</p></div>
		<nav id="nav">
			<ul>
			<li><a href="{{ url('/yowl') }}">Accueil</a></li>
				<li><a href="{{ url('/ctg') }}">Catégories</a></li>
				<li class="active">
                    @if (Route::has('login'))
                    @auth
                       <a href="{{ url('/rdgavis') }}" class="text-sm text-gray-700 underline">Rédigez un avis</a>
                       @else
                      <a> </a>
                     
                      
                    @endif
                    @endif
                    
                </li>
				<li><a href="{{ url('/contact') }}">Contact</a></li>
        <br>
        <li>
                    @if (Route::has('login'))
                    @auth
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

    <body> 
    

@section('content')
<div class="container">
<h1> Rédigez un avis </h1>
<hr>
<form method="post" action="{{ route('ad.store') }}" enctype='multipart/form-data'>
 @csrf
  <div class="form-group">
    <label for="title">Titre de ton avis</label>
    <input type="text" placeholder="Drone snaptain SPS500 mauvaise qualité.." class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} " id="title" aria-describedby="title" name="title">
    @if ($errors->has('title'))
    <span class="invalid-feedback"> {{ $errors->first('title') }} </span>
    @endif
  </div>
  <div class="form-group">
  <label for="description">Description</label> <br>
  <textarea name="description" placeholder="Après lecture du mode emploi en Français et installation de l'application sur mon smartphone, pour un débutant, je me débrouille pas mal. En 1 jour, déjà une bonne maîtrise de l'engin avec photos et vidéos niquel. Très bonnes résolutions du rendu de l'image via la caméra.
En revanche, gros défaut de chargement batterie de la commande (console) malgré maximum de temps de chargement avec la bonne prise fournie, toujours 1 barre (rouge)..." id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} " ></textarea>
  @if ($errors->has('description'))
    <span class="invalid-feedback"> {{ $errors->first('description') }} </span>
    @endif
  </div>
  <div class="form-group">
    <label for="site">Site</label>
    <input type="text" placeholder="www.amazon.fr" class="form-control {{ $errors->has('site') ? 'is-invalid' : '' }}" id="site" name="site">
    @if ($errors->has('site'))
    <span class="invalid-feedback"> {{ $errors->first('site') }} </span>
    @endif
  </div>
  <!-- <div class="form-group">
    <label for="price">Prix</label>
    <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price">
    @if ($errors->has('price'))
    <span class="invalid-feedback"> {{ $errors->first('price') }} </span>
    @endif
  </div> -->
  <label for="images">Image</label>
  <input type="file" name="images" class="form-control">
  @if ($errors->has('images'))
    <span class="invalid-feedback"> {{ $errors->first('images') }} </span>
    @endif

    <br>

  <button type="submit" class="btn btn-primary" style="float:center;" >POSTER MON AVIS</button>
</form>
</div>



    



























    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>