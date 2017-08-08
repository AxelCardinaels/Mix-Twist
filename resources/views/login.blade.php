@extends('app')
@section('content')

<section class="wrapper">
  <h2 class="content__title">Se connecter</h2>
    @include("forms.auth.login")
</section>


@endsection
