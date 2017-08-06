<form  role="form" method="POST" action="{{ url('mix/upvote/'.$recette->id) }}" class="">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <input type="submit" value="upvoter le mix!"/>

</form>
