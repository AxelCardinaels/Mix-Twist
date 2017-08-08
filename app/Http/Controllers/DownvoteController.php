<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Downvote;
use Illuminate\Support\Facades\Auth;

class DownvoteController extends Controller
{
  public function downvote($id){

    $downvote = new Downvote;
    $downvote->recette_id = $id;
    $downvote->user_id = Auth::user()->id;

    $downvote->save();

    return redirect('/');
  }
}
