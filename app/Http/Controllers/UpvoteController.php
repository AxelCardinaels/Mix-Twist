<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upvote;

class UpvoteController extends Controller
{
    public function upvote($id){

      $upvote = new Upvote;
      $upvote->recette_id = $id;

      $upvote->save();

      return redirect('/')->with('status', 'Données enregistrées, merci !');
    }
}
