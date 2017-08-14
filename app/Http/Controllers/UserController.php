<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Recette;
use Validator, Input, Redirect;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;

class UserController extends Controller
{
  public function doRegister(Request $request){

    $rules = [
      'name' => 'required|unique:users,name|alpha_num',
      'email' => 'required|unique:users,email|email',
      'password' => 'required|confirmed|between:5,20',
    ];

    $messages = [
      'required' => 'Le champ " :attribute" ne peut pas être vide.',
      'email' => 'L’adresse email doit être au format exemple@test.com.',
      'name.unique' => 'Ce pseudo est déja utilisé',
      'email.unique' => 'Cette adresse email est déja utilisée',
      'alpha_num' => 'Le pseudo ne peut être composé que de chiffres et lettres',
      'confirmed' => 'Les mots de passe ne concordent pas',
      'between' => 'Le mot de passe doit faire 5 caractères minimum et 20 maximum',
    ];

    $validator = Validator::make($request->all(),$rules, $messages);

    if ($validator->fails())
      {
        return redirect('/register')->withErrors($validator)->withInput();

      }else{

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('status', 'Votre compte à été créé, vous pouvez vous connecter !');
      }

  }

  function doLogin(Request $request){

    $rules = [
      'email' => 'required|exists:users,email|email',
      'password' => 'required',
    ];

    $messages = [
      'required' => 'Le champ " :attribute" ne peut pas être vide.',
      'email' => 'L’adresse email doit être au format exemple@test.com.',
      'exists' => 'Cette adresse email ne se trouve pas dans notre base de données',

    ];

    $validator = Validator::make($request->all(),$rules, $messages);


    if ($validator->fails())
      {
        return redirect('/login')->withErrors($validator)->withInput();

      }else{

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect('/')->with('status', 'Vous êtes maintenant connecté!');
        }else{
          $errors = ["Mauvais mot de passe!"];
          return redirect('login')->withErrors($errors)->withInput();
        }
      }
  }

  function doLogout(){
    Auth::logout();

    return redirect('/')->with('status', 'Vous êtes maintenant déconnecté!');
  }

  function show($id){

    if(User::where('id', $id)->exists()){
      $user = User::find($id);
      Date::setLocale('fr');
      foreach($user->recettes as $recette){

        $date = new Date($recette->created_at);
        $recette->date = $date->ago();
        $recette->votes = count($recette->upvotes) - count($recette->downvotes);
        if(Auth::check()){
          $recette["downvoted"] = Controller::CheckUserDownvotes($recette);
          $recette["upvoted"] = Controller::CheckUserupvotes($recette);
        }
      }

      return view('user.show',['user' => $user]);
    }else{
      return view('error.404');
    }



  }
}
