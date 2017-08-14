
@if (Auth::check())
  @if($recette["downvoted"])
    <form role="form" method="POST" action="{{ url('mix/downvote/remove/'.$recette->id) }}" class="vote__form vote--down downvote--done">
      <input type="submit" value="Ne plus downvoter le mix" class="vote__bouton bouton--downvote" data-href="{{url('ajax/recette/'.$recette->id)}}"/>
    @else
    <form role="form" method="POST" action="{{ url('mix/downvote/'.$recette->id) }}" class="vote__form vote--down">
    <input type="submit" value="Downvoter le mix!" class="vote__bouton bouton--downvote" data-href="{{url('ajax/recette/'.$recette->id)}}"/>
  @endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>
@else
  <form role="form" method="#" action="{{ url("/login") }}" class="vote__form vote--down">
  <input type="submit" value="Downvoter le mix!" class="vote__bouton bouton--downvote vote--login"/>
</form>
@endif
