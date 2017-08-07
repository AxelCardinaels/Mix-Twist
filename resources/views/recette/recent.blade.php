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
      @foreach($recettes as $recette)
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

                <p class="mix__author">Proposé par {{$recette->pseudo}} {{$recette->date}}</p>
              </div>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </section>




@endsection
