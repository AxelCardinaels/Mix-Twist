<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;
use App\Downvote;
use App\Upvote;
use Jenssegers\Date\Date;
use Validator, Input, Redirect;

class RecetteController extends Controller
{
    function soumettre(){
      return view('recette.soumettre');
    }

    public function doMix(Request $request){

      $rules = [
        'plat1' => 'required',
        'plat2' => 'required',
        'pseudo' => 'required',
        'email' => 'required|email',
      ];

      $messages = [
        'required' => 'Le champ " :attribute" ne peut pas être vide.',
        'email' => 'L’adresse email doit être au format exemple@test.com.',
      ];


    $validator = Validator::make($request->all(),$rules, $messages);

    if ($validator->fails())
      {
        return redirect('/mix/soumettre')->withErrors($validator)->withInput();

      }else{


        $recette = new Recette;
        $recette->plat1 = $request->plat1;
        $recette->plat2 = $request->plat2;
        $recette->pseudo = $request->pseudo;
        $recette->email = $request->email;

        $recette->save();

        return redirect('/mix/recent')->with('status', 'Le mix a été posté, merci !');
      }
    }

    public function show($id){
      $recette = Recette::where('id',$id)->first();
      $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      return view('recette.show',['recette' => $recette]);
    }

    function flop(){
      $recettes = Recette::orderBy('id')->get();
      Date::setLocale('fr');
      foreach($recettes as $recette){

        $date = new Date($recette->created_at);
        $recette->date = $date->ago();
        $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      }

      $recettes = $recettes->sortBy(function($recette){
        return $recette->votes;
      });

      return view('recette.flop',['recettes' => $recettes]);
    }

    function recent(){
      $recettes = Recette::orderByDesc('id')->get();
      Date::setLocale('fr');
      foreach($recettes as $recette){

        $date = new Date($recette->created_at);
        $recette->date = $date->ago();
        $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      }

      return view('recette.recent',['recettes' => $recettes]);
    }
}
