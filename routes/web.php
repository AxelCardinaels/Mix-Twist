<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' =>'home', 'uses' => 'PageController@home']);
Route::get('/apropos', ['as' => 'about', 'uses' => 'PageController@about']);
Route::get('/mix/soumettre', ['as' => 'soumettre', 'uses' => 'RecetteController@soumettre']);
Route::get('/mix/flop', ['as'=> 'flop', 'uses' => 'RecetteController@flop']);
Route::get('/mix/recent', ['as'=> 'recent', 'uses' => 'RecetteController@recent']);
Route::resource('mix', 'RecetteController');
Route::post('/mix/doMix', ['as' => 'doMix', 'uses' => 'RecetteController@doMix']);
Route::post('/mix/upvote/{id}', 'UpvoteController@upvote');
Route::post('/mix/upvote/remove/{id}', 'UpvoteController@removeUpvote');
Route::post('/mix/downvote/{id}', 'DownvoteController@downvote');
Route::post('/mix/downvote/remove/{id}', 'DownvoteController@removeDownvote');

Route::get('/register', ['as' => 'register', 'uses' => 'PageController@register']);
Route::post('user/create', ['as' => 'doRegister', 'uses' => 'UserController@doRegister']);


Route::get('/login', ['as' => 'login', 'uses' => 'PageController@login']);
Route::post('user/login', ['as' => 'doLogin', 'uses' => 'UserController@doLogin']);

Route::get('user/logout', ['as' => 'doLogout', 'uses' => 'UserController@doLogout']);

Route::get('/user/{id}', ['as' => 'userhome', 'uses' => 'UserController@show']);
Route::get('error/404',['uses' => 'ErrorController@error404']);

//AJAX

Route::get('/ajax/recette/{id}', [ 'uses' => 'AjaxController@updateRecette']);
