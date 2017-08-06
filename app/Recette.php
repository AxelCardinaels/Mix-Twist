<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
  public function upvotes(){
     return $this->hasMany('App\Upvote');
  }

  public function downvotes(){
    return $this->hasMany('App\Downvote');
  }
}
