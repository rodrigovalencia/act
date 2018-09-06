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

Route::get('/', [
	'uses'	=> 'PagesController@index',
	'as'	=> 'index'
]);

Route::prefix('administracion')->group(function(){
	Route::prefix('cargaCSV')->group(function(){
		Route::get('SATI', [
			'uses'	=> 'PagesController@cargarSATI',
			'as'	=> 'cargarSati'
		]);
		Route::get('SATI/show', [
			'uses'	=> 'PagesController@inspeccionarSATI',
			'as'	=> 'mostrarSati'
		]);
		Route::get('SATI/store', [
			'uses'	=> 'PagesController@guardarSATI',
			'as'	=> 'guardarSati'
		]);
	});
});