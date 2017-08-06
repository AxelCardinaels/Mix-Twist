@extends('app')
@section('content')

<div>
  <p>{{$recette->plat1}} + {{$recette->plat2}}</p>
  <p>{{$recette->votes}}</p>
  <p> + {{count($recette->upvotes)}}</p>
  <p> - {{count($recette->downvotes)}}</p>
  @include('forms/vote/upvote')
  @include('forms/vote/downvote')
</div>


@endsection
