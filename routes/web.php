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

Route::get('/', ['uses' => 'PageController@home']);
Route::get('/apropos', ['uses' => 'PageController@about']);
Route::get('/mix/soumettre', ['uses' => 'RecetteController@soumettre']);
Route::get('/mix/flop', ['as'=> 'flop', 'uses' => 'RecetteController@flop']);
Route::get('/mix/recent', ['as'=> 'recent', 'uses' => 'RecetteController@recent']);
Route::resource('mix', 'RecetteController');
Route::post('/mix/doMix', ['as' => 'doMix', 'uses' => 'RecetteController@doMix']);
Route::post('/mix/upvote/{id}', 'UpvoteController@upvote');
Route::post('/mix/downvote/{id}', 'DownvoteController@downvote');
