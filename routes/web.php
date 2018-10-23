<?php

use App\Exports\TestExport;
use App\Imports\TestImport;
use Maatwebsite\Excel\Facades\Excel;

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

<<<<<<< HEAD
// Activar para el LOGIN
// Route::get('/', 'PagesController@index') -> name('index');
Route::get('/', 'DashBoardController@index') -> name('dashboard.index');

Route::get('/testExport', function(){
        return Excel::download(new TestExport, 'algo.pdf');
});
Route::get('/testImport', function(){
        return Excel::import(new TestImport, 'algo.xlsx');
});

// RUTAS AJAX
Route::prefix('ajax')->group(function(){
	Route::prefix('radioTrabajo')->group(function(){
		Route::get('modelos/{id}'      , 'ajax\RadioTrabajoController@modelos')      -> name('ajax.radioTrabajo.modelos');
		Route::get('sistema/{id}'      , 'ajax\RadioTrabajoController@sistema')      -> name('ajax.radioTrabajo.sistema');
		Route::get('areas/{id}'        , 'ajax\RadioTrabajoController@areas')        -> name('ajax.radioTrabajo.areas');
		Route::get('bases/{id}'        , 'ajax\RadioTrabajoController@bases')        -> name('ajax.radioTrabajo.bases');
		Route::get('tiposEquipos/{id}' , 'ajax\RadioTrabajoController@tiposEquipos') -> name('ajax.radioTrabajo.tiposEquipos');
		Route::get('equipos/{id}'      , 'ajax\RadioTrabajoController@equipos')      -> name('ajax.radioTrabajo.equipos');
	});
});

// RUTAS DEL SISTEMA
Route::prefix('sistema')->group(function(){
	Route::get('/'          , 'DashBoardController@index')      -> name('dashboard.index');
	Route::get('inventario' , 'DashBoardController@inventario') -> name('dashboard.inventario');
});

// RUTAS DE TECNICOS
Route::prefix('tecnicos')->group(function(){
});

// RUTAS DE SUPERVISORES
Route::prefix('supervisores')->group(function(){
});

Route::prefix('algo')->group(function (){
=======
Route::get('/', 'PagesController@index') -> name('index');

// RUTAS AJAX
Route::prefix('ajax')->group(function(){
	Route::prefix('radioTrabajo')->group(function(){
		Route::get('modelos/{id}'      , 'ajax\RadioTrabajoController@modelos')      -> name('ajax.radioTrabajo.modelos');
		Route::get('sistema/{id}'      , 'ajax\RadioTrabajoController@sistema')      -> name('ajax.radioTrabajo.sistema');
		Route::get('areas/{id}'        , 'ajax\RadioTrabajoController@areas')        -> name('ajax.radioTrabajo.areas');
		Route::get('bases/{id}'        , 'ajax\RadioTrabajoController@bases')        -> name('ajax.radioTrabajo.bases');
		Route::get('tiposEquipos/{id}' , 'ajax\RadioTrabajoController@tiposEquipos') -> name('ajax.radioTrabajo.tiposEquipos');
		Route::get('equipos/{id}'      , 'ajax\RadioTrabajoController@equipos')      -> name('ajax.radioTrabajo.equipos');
	});
});

// RUTAS DEL SISTEMA
Route::prefix('sistema')->group(function(){
	Route::get('/'          , 'DashBoardController@index')      -> name('dashboard.index');
	Route::get('inventario' , 'DashBoardController@inventario') -> name('dashboard.inventario');
});

// RUTAS DE TECNICOS
Route::prefix('tecnicos')->group(function(){
});

// RUTAS DE SUPERVISORES
Route::prefix('supervisores')->group(function(){
>>>>>>> JNunez
});

// RUTAS DE ADMINISTRADORES
Route::prefix('administracion')->group(function(){
	Route::prefix('base')->group(function(){
		Route::resource('catEquipo', 'CategoriaEquipoController', [
			'as' => 'admin.base',
			'only' => ['index'],
		]);
		Route::resource('tipoBase', 'TipoBaseController', [
			'as' => 'admin.base',
			'only' => ['index'],
		]);
	});
	Route::prefix('activos')->group(function(){
		Route::resource('radioTrabajo'   , 'RadioTrabajoController', [
			'as' => 'admin.activos',
			'only' => ['create', 'store'],
		]);
	});
	Route::prefix('cargaCSV')->group(function(){
		Route::prefix('SATI')->group(function(){
			Route::get('/'     , 'CSVController@cargarSATI')  -> name('csv.sati.cargarSati');
			Route::get('store' , 'CSVController@guardarSATI') -> name('csv.sati.guardarSati');
		});
	});
});