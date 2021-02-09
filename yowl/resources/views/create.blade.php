@extends('layouts.app')

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
    <label for="site">Site du produit </label>
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
  <label for="images">Image du produit </label>
  <input type="file" name="images" class="form-control">
  @if ($errors->has('images'))
    <span class="invalid-feedback"> {{ $errors->first('images') }} </span>
    @endif

    <br>

  <button type="submit" class="btn btn-primary" style="float:center;" >POSTER MON AVIS</button>
</form>
</div>


@endsection