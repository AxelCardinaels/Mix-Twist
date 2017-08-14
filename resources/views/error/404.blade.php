@extends('app')
@section('content')
<section class="wrapper wrapper--error">
  <h2 class="content__title">Désolé, Erreur de mix !</h2>
  <a href="{{Route("home")}}" title="Retour à l'accueil" class="bouton">Retourner à l'accueil</a>
</section>


@endsection
