<form  role="form" method="POST" action="{{ url('mix/downvote/'.$recette->id) }}" class="vote__form vote--down">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <input type="submit" value="Downvoter le mix!" class="vote__bouton bouton--downvote"/>

</form>
