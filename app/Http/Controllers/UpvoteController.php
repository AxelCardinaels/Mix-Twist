<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upvote;
use App\Recette;
use App\Downvote;
use Illuminate\Support\Facades\Auth;
use \Response;


class UpvoteController extends Controller
{
    public function upvote($id){
      $recette = Recette::where("id", $id)->first();
      $recette["downvoted"] = Controller::CheckUserDownvotes($recette);

      if($recette["downvoted"]){
        $downvotes = Downvote::where(['recette_id' => $id, 'user_id' => Auth::user()->id])->get();
        foreach($downvotes as $downvote){
          $downvote->delete();
        }
      }


      $upvote = new Upvote;
      $upvote->recette_id = $id;
      $upvote->user_id = Auth::user()->id;

      $upvote->save();

      return Response::json(array('success' => 'On est bon', 'error' => 'error'));
    }

    public function removeUpvote($id){

      $upvotes = Upvote::where(['recette_id' => $id, 'user_id' => Auth::user()->id])->get();

      foreach($upvotes as $upvote){
        $upvote->delete();
      }

      return Response::json(array('success' => 'On est bon', 'error' => 'error'));
    }
}
