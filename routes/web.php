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
		'only' => ['index', 'create'],
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
 * Impresion de documentos
 */
Route::prefix('impresion')->namespace('impresion')->name('impresora.')->group(function(){
	Route::get('test', 'ImpresoraController@test')->name('test');
});

/*
 * AJAX
 */
Route::prefix('ajax')->namespace('ajax')->name('ajax.')->group(function(){
	Route::prefix('radioTrabajo')->name('radioTrabajo.')->group(function(){
		Route::get('modelos/{id}'               , 'RadioTrabajoController@modelos')           -> name('modelos');
		Route::get('sistemas/{id}'              , 'RadioTrabajoController@sistemas')          -> name('sistemas');
		Route::get('expReg/{id}'                , 'RadioTrabajoController@expReg')            -> name('expReg');
		Route::get('areas/{id}'                 , 'RadioTrabajoController@areas')             -> name('areas');
		Route::get('tiposUbicaciones/{id}'      , 'RadioTrabajoController@tiposUbicaciones')  -> name('tiposUbicaciones');
		Route::get('tiposBases/{id}'            , 'RadioTrabajoController@tiposBases')        -> name('tiposBases');
		Route::get('bases/{T_id}/{U_id}'        , 'RadioTrabajoController@bases')             -> name('bases');
		Route::get('categoriasEquipos/{id}'     , 'RadioTrabajoController@categoriasEquipos') -> name('categoriasEquipos');
		Route::get('tiposEquipos/{C_id}/{U_id}' , 'RadioTrabajoController@tiposEquipos')      -> name('tiposEquipos');
		Route::get('equipos/{T_id}/{U_id}'      , 'RadioTrabajoController@equipos')           -> name('equipos');
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
		Route::get('uAsigCSV'  , 'ExportGeneralController@uAsigCSV')  -> name('CSV');
		Route::get('uAsigXLSX' , 'ExportGeneralController@uAsigXLSX') -> name('XLSX');
		Route::get('uAsigPDF'  , 'ExportGeneralController@uAsigPDF')  -> name('PDF');
	});
	Route::prefix('general')->name('vAsig.')->group(function(){
		Route::get('vAsigCSV'  , 'ExportGeneralController@vAsigCSV')  -> name('CSV');
		Route::get('vAsigXLSX' , 'ExportGeneralController@vAsigXLSX') -> name('XLSX');
		Route::get('vAsigPDF'  , 'ExportGeneralController@vAsigPDF')  -> name('PDF');
	});
});