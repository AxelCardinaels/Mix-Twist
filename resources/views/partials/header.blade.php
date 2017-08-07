<!DOCTYPE html>
  <html lang="fr">
  <head>
  	<meta charset="UTF-8">
    <title>Mix & Twist</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,500" rel="stylesheet">
    <link href="{{ asset('/css/screen.css') }}" rel="stylesheet">

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

        <nav class="header__menu">
          <h2 class="hide">Menu de navigation</h2>
          <ul class="menu__list list-inline">
            <li class="menu__item">
              <a href="/" title="Retourner à la page d'accueil" class="menu__link">Accueil</a>
            </li>
            <li class="menu__item">
              <a href="/apropos" title="Afficher la page d'informations de Mix et Twist" class="menu__link">A propos</a>
            </li>

            <li class="menu__item">
              <a href="/mix/soumettre" title="Afficher la page de publication d'un Mix" class="menu__link bouton">Poster un mix</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
