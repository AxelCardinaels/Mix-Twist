<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function CheckUserDownvotes($recette){
      $votes = [""];
      $id = $recette->id;

      foreach(Auth::user()->downvotes as $downvote){
        array_push($votes, $downvote->recette_id);
      }

      if(in_array($id, $votes)){
        return true;
      }else{
        return false;
      }
    }

    public function CheckUserUpvotes($recette){
      $votes = [""];
      $id = $recette->id;

      foreach(Auth::user()->upvotes as $upvote){
        array_push($votes, $upvote->recette_id);
      }

      if(in_array($id, $votes)){
        return true;
      }else{
        return false;
      }
    }

}
