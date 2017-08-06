<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;
use App\Downvote;
use App\Upvote;

class PageController extends Controller
{
    function home(){
      $recettes = Recette::orderBy('id')->get();

      foreach($recettes as $recette){
        $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      }
      return view('home',['recettes' => $recettes]);
    }

    function about(){
      $recettes = Recette::orderBy('id')->get();

      return view('about',['recettes' => $recettes]);
    }
}
