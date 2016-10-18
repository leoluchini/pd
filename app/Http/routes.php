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
Route::get('propio-pymes/{id}/{object?}/{program?}/{organization?}', ['as' => 'propio_pyme', 'uses' => 'PropioPymeController@index']);
Route::post('servicios/{id}/suscribirse', [ 'as' => 'servicios.suscribe' , 'uses' => 'ServiceController@suscribe'] );

Route::auth();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('indicadores', 'IndicatorController');
	Route::put('indicadores/{id}/cambiar_orden', [ 'as' => 'indicadores.change_orden' , 'uses' => 'IndicatorController@change_orden'] );
	Route::resource('servicios', 'ServiceController');
	Route::get('servicios/{id}/cambiar_privacidad', [ 'as' => 'servicios.change_privacity' , 'uses' => 'ServiceController@change_privacity'] );
	Route::put('servicios/{id}/cambiar_orden', [ 'as' => 'servicios.change_orden' , 'uses' => 'ServiceController@change_orden'] );
	Route::resource('staff', 'StaffController');
	Route::resource('portada', 'CoverPageController', ['except' => ['create', 'store']]);
	Route::put('portada/{id}/cambiar_orden', [ 'as' => 'portada.change_orden' , 'uses' => 'CoverPageController@change_orden'] );
	
	Route::group(['prefix' => 'propio_pymes'], function() {
		Route::resource('entidades', 'EntityController');
		Route::resource('entidades.objetos', 'ItemExpeditureController');
		Route::resource('entidades.objetos.programas', 'ProgramController');
		Route::resource('entidades.objetos.programas.organismos', 'OrganizationController');
  });
	
  Route::get('perfil', [ 'as' => 'perfil' , 'uses' => 'ProfileController@edit' ] );
  Route::patch('perfil', [ 'as' => 'perfil' , 'uses' => 'ProfileController@update'] );
  Route::patch('update_password', [ 'as' => 'perfil.update_password' , 'uses' => 'ProfileController@update_password'] );
	Route::get('/home', [ 'as' => 'home' , 'uses' => 'HomeController@index' ] );	
});
