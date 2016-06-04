<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',  function () {
    //
    return redirect()->route('main:home');
});
Route::auth();

Route::get('/test', 'MainController@test');
Route::post('/test', 'MainController@postTest');
Route::group([ 'as' => 'main:' , 'middleware' => 'web'], function () 
{
  	
    Route::get('/home'    , ['as' => 'home'    , 'uses' => 'MainController@index' ]  );
	Route::get('/contact' , ['as' => 'contact' , 'uses' => 'MainController@viewContactUs' ]);
	Route::get('/about'   , ['as' => 'about'   , 'uses' => 'MainController@viewAboutUs' ]);
	Route::get('/trucks/{slug}'  , ['as' => 'trucks'  , 'uses' => 'MainController@viewAllTrucks' ]);
	Route::get('/viewTruck/{post-name}/{id}', ['as'=> 'viewTruck', 'uses' => 'MainController@viewTruck']);
});

Route::group([ 'as' => 'admin:' , 'middleware' => 'auth'], function () 
{
	Route::get('/dashboard' , ['as' => 'dashboard', 'uses' => 'AdminController@index'] );
	
});






