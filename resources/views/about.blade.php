@extends('app')
@section('content')

  <section class="wrapper--texts">
    <h2 class="content__title">A propos de ce site</h2>
    <div class="about__text">
      <p class="about__paragraph">Du texte bla bla bla</p>
    </div>

    <div class="about__text">
      <p class="about__paragraph">Le concept de ce site se base sur une idée des youtubeurs McFly et Carlito. L'idée est lancée dans
      <a href="https://www.youtube.com/watch?v=sdioXgobPoA&t=713s" target="_blank" title="Afficher la vidéo de McFly et Carlito" class="text__link">Cette vidéo</a></p>
    </div>

    <div class="about__text">
      <p class="about__paragraph">Déjà {{count($recettes)}} recettes publiées!</p>
    </div>


  </section>



@endsection
