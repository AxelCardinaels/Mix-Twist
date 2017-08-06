<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downvote extends Model
{
  public function recette(){
    return $this->belongsTo('App\Recette');
  }
}
