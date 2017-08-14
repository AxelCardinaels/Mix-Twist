<nav class="filter__menu">
  <h2 class="hide">Menu de tri des mixs</h2>
  <ul class="filter__list list-inline">
    <li class="filter__item">
      <a href="/"
      @if(Route::currentRouteName() == "home")
        class="filter__link filter--current" title="Afficher les meilleurs Mixs">Top</a>
      @else
      class="filter__link"title="Afficher les meilleurs Mixs">Top</a>
      @endif
    </li>

    <li class="filter__item">
      <a href="{{route('recent')}}"
      @if(Route::currentRouteName() == "recent")
        class="filter__link filter--current" title="Afficher les Mixs les plus récents">Récent</a>
      @else
      class="filter__link" title="Afficher les Mixs les plus récents">Récent</a>
      @endif


    </li>

    <li class="filter__item">
      <a href="{{route('flop')}}"
      @if(Route::currentRouteName() == "flop")
        class="filter__link filter--current" title="Afficher les pires Mixs">Flop</a>
      @else
        class="filter__link" title="Afficher les pires Mixs">Flop</a>
      @endif
    </li>

  </ul>
</nav>
