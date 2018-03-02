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

Route::get('/', ['uses'=>'welcomeController@index', 'as'=>'home']);

Route::get('view1', function(){
    return view('vue1');
});
Route::get('article/{n}', 'articleController@show')->where('n', '[0-9]+');

Route::get('facture/{n}', function($n){
    return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('users', 'UserController@getInfos');
Route::post('users', 'UserController@postInfos');

Route::get('contact', 'contactController@getForm');
Route::post('contact', 'contactController@postForm');