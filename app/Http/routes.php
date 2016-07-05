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
	Route::post('/postContact' , ['as' => 'postContact' , 'uses' => 'MainController@postContactUs' ]);


	Route::get('/about'   , ['as' => 'about'   , 'uses' => 'MainController@viewAboutUs' ]);
	Route::get('/trucks/{slug}'  , ['as' => 'trucks'  , 'uses' => 'MainController@viewAllTrucks' ]);
	Route::get('/viewTruck/truck/{id}', ['as'=> 'viewTruck', 'uses' => 'MainController@viewTruck']);
});

Route::group([ 'as' => 'admin:' , 'middleware' => 'auth'], function () 
{
	Route::get('/dashboard' , ['as' => 'dashboard'  , 'uses' => 'AdminController@index'] );

	// Trucks
	Route::get('/listTrucks', ['as' => 'listTrucks' , 'uses' => 'AdminController@viewTrucks']);
	Route::get('/truckEntry', ['as' => 'truckEntry' , 'uses' => 'AdminController@viewTruckEntry']);
	Route::post('/truckEntry', ['as' => 'postTruckEntry' , 'uses' => 'AdminController@postTruckEntry']);

	Route::get('/editTruckEntry/{id}', ['as' => 'editTruckEntry' , 'uses' => 'AdminController@viewEditTruckEntry']);
	Route::post('/editTruckEntry/{id}', ['as' => 'postEditTruckEntry' , 'uses' => 'AdminController@postEditTruckEntry']);
	//Truck Category

	Route::get('/listCategory', ['as' => 'listCategory' , 'uses' => 'AdminController@viewCategory']);
	Route::get('/categoryEntry', ['as' => 'categoryEntry' , 'uses' => 'AdminController@viewCategoryEntry']);
	Route::post('/postCategoryEntry', ['as' => 'postCategoryEntry' , 'uses' => 'AdminController@postCategoryEntry']);

	Route::get('/editCategory/{id}', ['as' => 'editCategory' , 'uses' => 'AdminController@viewEditCategoryEntry']);
	Route::post('/editCategory/{id}', ['as' => 'postEditCategoryEntry' , 'uses' => 'AdminController@postEditCategoryEntry']);
});






