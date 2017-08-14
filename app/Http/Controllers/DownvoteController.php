<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Downvote;
use App\Upvote;
use App\Recette;
use Illuminate\Support\Facades\Auth;
use \Response;

class DownvoteController extends Controller
{
  public function downvote($id){

    $recette = Recette::where("id", $id)->first();
    $recette["upvoted"] = Controller::CheckUserUpvotes($recette);

    if($recette["upvoted"]){
      $upvotes = Upvote::where(['recette_id' => $id, 'user_id' => Auth::user()->id])->get();
      foreach($upvotes as $upvote){
        $upvote->delete();
      }
    }

    $downvote = new Downvote;
    $downvote->recette_id = $id;
    $downvote->user_id = Auth::user()->id;

    $downvote->save();

    return Response::json(array('success' => 'On est bon', 'error' => 'error'));
  }

  public function removeDownvote($id){

    $downvotes = Downvote::where(['recette_id' => $id, 'user_id' => Auth::user()->id])->get();

    foreach($downvotes as $downvote){
      $downvote->delete();
    }

    return Response::json(array('success' => 'On est bon', 'error' => 'error'));
  }
}
