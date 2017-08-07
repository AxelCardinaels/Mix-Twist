<nav class="filter__menu">
  <h2 class="hide">Menu de tri des mixs</h2>
  <ul class="filter__list list-inline">
    <li class="filter__item">
      <a href="/" class="filter__link filter--current" title="Afficher les meilleurs Mixs">Top</a>
    </li>

    <li class="filter__item">
      <a href="{{route('recent')}}" class="filter__link" title="Afficher les Mixs les plus récents">Récent</a>
    </li>

    <li class="filter__item">
      <a href="{{route('flop')}}" class="filter__link" title="Afficher les pires Mixs">Flop</a>
    </li>

  </ul>
</nav>
