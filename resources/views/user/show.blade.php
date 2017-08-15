@extends('app')
@section('content')




  <section class="wrapper">
    <h2 class="content__title">Les Mixs de {{$user->name}}</h2>

    @if(Auth::check())

      @if(Auth::id() == $user->id)
        <div class="user__logout">
          <a href="{{route("doLogout")}}" title="Se déconnecter" class="bouton bouton--disconnect">Se déconnecter</a>
        </div>
      @endif
    @endif

    <ul class="mix__list">
      @if($user->recettes->count() == 0)
        <p class="mix__nope">Désolé, cet utilisateur n'a pas encore posté de Mixs !</p>
      @else
        @foreach($user->recettes as $recette)

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
