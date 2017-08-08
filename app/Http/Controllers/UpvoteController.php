<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upvote;
use Illuminate\Support\Facades\Auth;

class UpvoteController extends Controller
{
    public function upvote($id){

      $upvote = new Upvote;
      $upvote->recette_id = $id;
      $upvote->user_id = Auth::user()->id;

      $upvote->save();

      return redirect('/');
    }
}
