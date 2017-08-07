<form  role="form" method="POST" action="{{ url('mix/upvote/'.$recette->id) }}" class="vote__form vote--up">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <input type="submit" value="upvoter le mix!" class="vote__bouton bouton--upvote"/>

</form>
