@extends('app')
@section('content')




  <section class="wrapper">
    <h2 class="content__title">Les Mixs de {{$user->name}}</h2>

    <ul class="mix__list">
      @foreach($user->recettes as $recette)

          <li class="mix__item clearfix">
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

                  <p class="mix__author">Proposé par {{$recette->user->name}} {{$recette->date}}</p>
                </div>
              </div>
            </div>
          </li>
      @endforeach
    </ul>

  </section>




@endsection
