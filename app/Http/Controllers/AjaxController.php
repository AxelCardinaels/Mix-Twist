<?php

namespace App\Http\Controllers;
use App\Recette;
use App\Downvote;
use App\Upvote;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function updateRecette($id){
      $recette = Recette::where("id", $id)->first();
      $recette["upvoted"] = Controller::CheckUserUpvotes($recette);
      $recette["downvoted"] = Controller::CheckUserDownvotes($recette);

      Date::setLocale('fr');
      $date = new Date($recette->created_at);
      $recette->date = $date->ago();
      $recette->votes = count($recette->upvotes) - count($recette->downvotes);

      return view('ajax.updatedRecette',['recette' => $recette]);
    }
}
