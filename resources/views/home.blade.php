@extends('app')
@section('content')

  @include("partials.filters")

  <section class="wrapper">
    <h2 class="content__title">Les meilleurs Mixs</h2>

    <ul class="mix__list">
      @foreach($recettes as $recette)
        <li class="mix__item">
          <div class="mix__points">
            @include('forms/vote/upvote')
            <p>{{$recette->votes}}</p>
            @include('forms/vote/downvote')
          </div>
          <div class="mix__infos">
            <h3 class="mix__title">
              <p>{{$recette->plat1}} + {{$recette->plat2}}</p>
            </h3>

            <p class="mix__author">Proposé par {{$recette->pseudo}} il y a {{$recette->date}}</p>
          </div>
        </li>
      @endforeach
    </ul>
  </section>




@endsection
