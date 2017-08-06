<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;

class RecetteController extends Controller
{
    function soumettre(){
      return view('recette.soumettre');
    }

    public function doMix(Request $request){
      $recette = new Recette;
      $recette->plat1 = $request->plat1;
      $recette->plat2 = $request->plat2;
      $recette->pseudo = $request->pseudo;
      $recette->email = $request->email;

      $recette->save();

      return redirect('/mix/'.$recette->id)->with('status', 'Données enregistrées, merci !');
    }

    public function show($id){
      $recette = Recette::where('id',$id)->first();
      $recette->votes = count($recette->upvotes) - count($recette->downvotes);
      return view('recette.show',['recette' => $recette]);
    }
}
