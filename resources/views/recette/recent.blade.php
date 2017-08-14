@extends('app')
@section('content')

  @include("partials.filters")

  <section class="wrapper">
    <h2 class="content__title">Les derniers Mixs</h2>


    @if (session('status'))
      <div class="alert__container alert--success">
          {{ session('status') }}
      </div>
    @endif

    <ul class="mix__list">
      @if($recettes->count() == 0)
        <p class="mix__nope">Désolé, il n'y a pas encore de Mixs ! Pourquoi ne pas en <a class="text__link" href="{{url("/mix/soumettre")}}" title="Poster un mix">proposer un ?</a></p>
      @else
        @foreach($recettes as $recette)

            <li class="mix__item clearfix" id="recette{{$recette->id}}">
              <div class="mix__points">
                @include('forms/vote/upvote')
                <p class="points__total">{{$recette->votes}}</p>
                @include('forms/vote/downvote')
              </div>
              <div class="mix__infos">
                <div class="infos__container">
                  <div class="container__align">
                    <h3 class="mix__title">
                      {{$recette->plat1}} + {{$recette->plat2}}
                    </h3>

                    <p class="mix__author">Proposé par <a href="{{url('/user/'.$recette->user->id)}}" title="Afficher le profil de {{$recette->user->name}}" class="text__link">{{$recette->user->name}}</a> {{$recette->date}}</p>
                  </div>
                </div>
              </div>
            </li>
        @endforeach
      @endif
    </ul>
  </section>




@endsection
