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

	
Route::get('/', ['as' => '/', 'uses' => 'FrontendController@index']);

Route::auth();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('indicadores', 'IndicatorController');
	Route::put('indicadores/{id}/cambiar_orden', [ 'as' => 'indicadores.change_orden' , 'uses' => 'IndicatorController@change_orden'] );
	Route::resource('servicios', 'ServiceController');
	Route::get('servicios/{id}/cambiar_privacidad', [ 'as' => 'servicios.change_privacity' , 'uses' => 'ServiceController@change_privacity'] );
	Route::put('servicios/{id}/cambiar_orden', [ 'as' => 'servicios.change_orden' , 'uses' => 'ServiceController@change_orden'] );
	Route::resource('entities.topics', 'EntityTopicController');
	Route::resource('entities.topics.items', 'EntityTopicItemController');
	Route::get('/home', 'HomeController@index');	
});
