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

Route::prefix('sistema')->group(function(){
	Route::get('/', [
		'uses'	=> 'DashBoardController@index',
		'as'	=> 'dashboard.index'
	]);
	Route::get('inventario', [
		'uses'	=> 'DashBoardController@inventario',
		'as'	=> 'dashboard.inventario'
	]);
});

Route::prefix('tecnicos')->group(function(){
});

Route::prefix('supervisores')->group(function(){
});

Route::prefix('administracion')->group(function(){
	Route::prefix('activos')->group(function(){
		Route::resource('radioTrabajo', 'RadioTrabajoController', [
			'only' => ['create', 'store']
		]);
	});
	Route::prefix('cargaCSV')->group(function(){
		Route::prefix('SATI')->group(function(){
			Route::GET('/', [
				'uses'	=> 'CSVController@cargarSATI',
				'as'	=> 'csv.sati.cargarSati'
			]);
			Route::POST('store', [
				'uses'	=> 'CSVController@guardarSATI',
				'as'	=> 'csv.sati.guardarSati'
			]);
		});
	});
});