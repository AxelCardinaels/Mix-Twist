<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $table = "users";
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function downvotes(){
      return $this->hasMany('App\Downvote');
    }

    public function upvotes(){
      return $this->hasMany('App\Upvote');
    }

    public function recettes(){
      return $this->hasMany('App\Recette');
    }


}
