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

	
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

	Route::resource('indicadores', 'IndicatorController');
	Route::resource('servicios', 'ServiceController');
	Route::get('servicios/{id}/cambiar_privacidad', [ 'as' => 'servicios.change_privacity' , 'uses' => 'ServiceController@change_privacity'] );
	Route::resource('entities.topics', 'EntityTopicController');
	Route::resource('entities.topics.items', 'EntityTopicItemController');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index');
});
