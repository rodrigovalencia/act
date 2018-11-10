<?php

// Activar para el LOGIN
// Route::get('/', 'PagesController@index') -> name('index');
Route::get('/', 'general\DashBoardController@index') -> name('dashboard.index');

/*
 * Sistema
 */
Route::prefix('sistema')->namespace('general')->name('dashboard.')->group(function(){
	Route::get('/'          , 'DashBoardController@index')      -> name('index');
	Route::get('inventario' , 'DashBoardController@inventario') -> name('inventario');
});

/*
 * Ticket
 */
Route::namespace('ticket')->group(function(){
	Route::resource('ticket', 'TicketController', [
		'only' => ['index', 'create','store'],
	]);
});

/*
 * Administracion
 */
Route::prefix('administracion')->namespace('admin')->name('admin.')->group(function(){
	Route::prefix('base')->namespace('base')->name('base.')->group(function(){
		Route::resource('catEquipo', 'CategoriaEquipoController', [
			'only' => ['index'],
		]);
		Route::resource('tipoBase', 'TipoBaseController', [
			'only' => ['index'],
		]);
	});
	Route::prefix('activos')->namespace('activo')->name('activos.')->group(function(){
		Route::resource('radioTrabajo', 'RadioTrabajoController');
	});
});

/*
 * AJAX
 */
Route::prefix('ajax')->namespace('ajax')->name('ajax.')->group(function(){
	Route::prefix('radioTrabajo')->name('radioTrabajo.')->group(function(){
		Route::get('modelos/{id}'      , 'RadioTrabajoController@modelos')      -> name('modelos');
		Route::get('sistema/{id}'      , 'RadioTrabajoController@sistema')      -> name('sistema');
		Route::get('areas/{id}'        , 'RadioTrabajoController@areas')        -> name('areas');
		Route::get('bases/{id}'        , 'RadioTrabajoController@bases')        -> name('bases');
		Route::get('tiposEquipos/{id}' , 'RadioTrabajoController@tiposEquipos') -> name('tiposEquipos');
		Route::get('equipos/{id}'      , 'RadioTrabajoController@equipos')      -> name('equipos');
	});
	Route::prefix('faena')->name('faena.')->group(function(){
		Route::get('ubicaciones/{id}'	,'FaenaController@ubicaciones')						->name('ubicaciones');
		Route::get('areas/{id}'	,'FaenaController@areas')									->name('areas');
		Route::get('subCategoriasTicket/{id}'	,'FaenaController@subCategoriasTicket')		->name('subCategoriasTicket');
		Route::get('buscarActivo/{id}/{activeType}'	,'FaenaController@buscarActivo')		->name('buscarActivo');
	});
});

/*
 * Cargas Masivas
 */
Route::prefix('cargaMasiva')->namespace('io')->name('carga.')->group(function(){
	Route::prefix('SATI')->name('sati.')->group(function(){
		Route::get('/'          , 'ImportController@cargarSATI')  -> name('cargarSati');
		Route::post('storeSati' , 'ImportController@guardarSATI') -> name('guardarSati');
	});
});

/*
 * Reportes
 */
Route::prefix('reportes')->namespace('io')->name('reporte.')->group(function (){
	Route::get('/', 'ExportController@index') -> name('index');
	Route::prefix('general')->name('uAsig.')->group(function(){
		Route::get('terminalesCSV'  , 'ExportGeneralController@terminalesCSV')  -> name('terminalesCSV');
		Route::get('terminalesXLSX' , 'ExportGeneralController@terminalesXLSX') -> name('terminalesXLSX');
		Route::get('terminalesPDF'  , 'ExportGeneralController@terminalesPDF')  -> name('terminalesPDF');
	});
});
/*
 * Mantenciones
 */
Route::namespace('mantencion')->group(function(){
	Route::resource('mantencion', 'MantencionController', [
		'only' => ['index', 'create','store'],
	]);
});
/*
 * Programaciones de Radio
 */
Route::namespace('programacionRadio')->group(function(){
	Route::resource('programacionRadio', 'ProgramacionRadioController', [
		'only' => ['index', 'create','store'],
	]);
});
/*
 * Reparaciones
 */
Route::namespace('reparacion')->group(function(){
	Route::resource('reparacion', 'ReparacionController', [
		'only' => ['index', 'create','store'],
	]);
});