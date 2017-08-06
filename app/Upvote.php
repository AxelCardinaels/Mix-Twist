<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
  public function recette(){
    return $this->belongsTo('App\Recette');
  }
}
