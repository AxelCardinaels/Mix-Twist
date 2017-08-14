
@if (Auth::check())
  @if($recette["upvoted"])
    <form  role="form" method="POST" action="{{ url('mix/upvote/remove/'.$recette->id) }}" class="vote__form vote--up upvote--done">
      <input type="submit" value="Ne plus upvoter le mix" class="vote__bouton bouton--upvote" data-href="{{url('ajax/recette/'.$recette->id)}}"/>
    @else
    <form  role="form" method="POST" action="{{ url('mix/upvote/'.$recette->id) }}" class="vote__form vote--up">
      <input type="submit" value="upvoter le mix!" class="vote__bouton bouton--upvote" data-href="{{url('ajax/recette/'.$recette->id)}}"/>
  @endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

@else
  <form  role="form" method="#" action="{{ url("/login") }}" class="vote__form vote--up">
    <input type="submit" value="upvoter le mix!" class="vote__bouton bouton--upvote vote--login"/>
  </form>
@endif
