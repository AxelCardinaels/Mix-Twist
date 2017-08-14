<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downvote extends Model
{
  public function recette(){
    return $this->belongsTo('App\Recette');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
