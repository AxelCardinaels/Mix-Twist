<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Downvote;

class DownvoteController extends Controller
{
  public function downvote($id){

    $downvote = new Downvote;
    $downvote->recette_id = $id;

    $downvote->save();

    return redirect('/')->with('status', 'Données enregistrées, merci !');
  }
}
