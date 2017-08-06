<form  role="form" method="POST" action="{{ url('mix/downvote/'.$recette->id) }}" class="">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <input type="submit" value="Downvoter le mix!"/>

</form>
