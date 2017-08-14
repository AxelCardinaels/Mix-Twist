<!DOCTYPE html>
  <html lang="fr">
  <head>
  	<meta charset="UTF-8">
    <title>Mix & Twist</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500" rel="stylesheet">
    <link href="{{ asset('/css/screen.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('/') }}/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('/') }}/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/') }}/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ URL::to('/') }}/img/favicon/manifest.json">
    <link rel="mask-icon" href="{{ URL::to('/') }}/img/favicon/safari-pinned-tab.svg" color="#125dcc">
    <meta name="theme-color" content="#ffffff">

  	<!-- Modernizer -->
  </head>

  <body>
    <header class="header">
      <div class="wrapper--large clearfix">
        <h1 class="title--logo">
          <span class="hide">Mix & Twist!</span>
          <a href="/" title="Retour à la page d'accueil" class="logo__link">
            <img alt="Logo de Mix et Twist" src="{{ URL::to('/') }}/img/logo.svg" class="logo__img">
          </a>
        </h1>

        <div class="burger__container">
    			<a href="#" class="burger__open burger__icon" title="Ouvrir le menu">
    				<img class="burger__img menu--open" src="{{ URL::to('/') }}/img/burgeropen.svg" alt="Icone ouverture du menu"/>
    			</a>

    			<a href="#" class="burger__close burger__icon burger--hidden" title="Fermer le menu">
    				<img class="burger__img menu--close" src="{{ URL::to('/') }}/img/burgerclose.svg" alt="Icone fermeture du menu"/>
    			</a>
		    </div>
        <nav class="header__menu menu--hidden">
          <h2 class="hide">Menu de navigation</h2>
          <ul class="menu__list list-inline">
            <li class="menu__item">
              <a href="/" title="Retourner à la page d'accueil"
              @if(Route::currentRouteName() == "home")
                class="menu__link link--active">Accueil</a>
              @else
              class="menu__link">Accueil</a>
              @endif
            </li>
            <li class="menu__item">
              <a href="/apropos" title="Afficher la page d'informations de Mix et Twist"
              @if(Route::currentRouteName() == "about")
                class="menu__link link--active">A propos</a>
              @else
              class="menu__link">A propos</a>
              @endif
            </li>

            @if (Auth::check())

              <li class="menu__item">
                <a href="{{url('/user/'.Auth::user()->id)}}" title="Afficher mon profil"
                  @if(Route::currentRouteName() == "userhome")
                    class="menu__link link--active">{{Auth::user()->name}}</a>
                  @else
                    class="menu__link">{{Auth::user()->name}}</a>
                  @endif
              </li>

              <li class="menu__item item--bouton">
                <a href="/mix/soumettre" title="Afficher la page de publication d'un Mix" class="menu__link bouton">Poster un mix</a>
              </li>
            @else
              <li class="menu__item item--bouton">
                <a href="{{route('login')}}" title="Se connecter" class="menu__link bouton">Connexion / Rejoindre</a>
              </li>

          @endif

          </ul>
        </nav>
      </div>
    </header>
    <main>
