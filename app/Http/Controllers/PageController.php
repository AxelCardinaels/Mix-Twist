<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;
use App\Downvote;
use App\Upvote;
use Jenssegers\Date\Date;

class PageController extends Controller
{
    function home(){
      $recettes = Recette::orderBy('id')->get();
      Date::setLocale('fr');
      foreach($recettes as $recette){

        $date = new Date($recette->created_at);
        $recette->date = $date->ago();
        $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      }

      $recettes = $recettes->sortByDesc(function($recette){
        return $recette->votes;
      });

      return view('home',['recettes' => $recettes]);

    }

    function about(){
      $recettes = Recette::orderBy('id')->get();

      return view('about',['recettes' => $recettes]);
    }
}
