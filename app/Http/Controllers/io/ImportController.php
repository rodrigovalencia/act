<?php

namespace App\Http\Controllers\io;

use App\Http\Controllers\Controller;
use App\Http\Requests\CsvImportRequest;
use App\Imports\SATIImport;
use App\SATI;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\HeadingRowImport;

class ImportController extends Controller
{
	function cargarSATI(){
		return view('admin.cargaMasiva.SATI.obtenerCSV');
	}

	function guardarSATI(CsvImportRequest $request){

		(new SATIImport)->import($request->file('archivoCSV'));

		// $headings = (new HeadingRowImport)->toArray($request->file('archivoCSV'));

		// var_dump($headings);

		// $coleccion = (new SATIImport)->toCollection($request->file('archivoCSV'));
		
		// var_dump($coleccion);

		// return 'aki estamos';
		// <<<<<<<<<<      >>>>>>>>>>
		// <<<<<<<<<< BASE >>>>>>>>>>
		// <<<<<<<<<<      >>>>>>>>>>

		// return redirect('/')->with('success', 'All good!');

		// return Excel::import(new SATIImport, 'algo.xlsx');
		// return (new TerminalesExport)->download('terminales.xlsx');

		// <<<<<<<<<<         >>>>>>>>>>
		// <<<<<<<<<< ANTIGUO >>>>>>>>>>
		// <<<<<<<<<<         >>>>>>>>>>

		// $path = $request->file('archivoCSV')->getRealPath();

		// $contenido = str_getcsv( file_get_contents($path), "\n");
		// foreach($contenido as &$fila) $fila = str_getcsv($fila, ";");

		// if (count($contenido) > 1) {
		// 	$comparador = [
		// 		'rut',
		// 		'numSAP',
		// 		'nombre',
		// 		'nombre2',
		// 		'apPaterno',
		// 		'apMaterno',
		// 		'userID',
		// 		'fTerminoContrato',
		// 		'cecoGrafo',
		// 		'TipoContrato',
		// 		'Contrato',
		// 		'Estado',
		// 	];

		// 	foreach ($comparador as $key => $value) {
		// 		if (strcmp($value, $contenido[0][$key]) != 0) {
		// 			return redirect()->back();
		// 		}
		// 	}

		// 	$datos = array_slice($contenido, 1);

		// 	foreach ($datos as $dato) {
		// 		try {
		// 			$sati = new SATI();
		// 			$sati->rut				= ($dato[0] != '')	? $dato[0]											: null ;
		// 			$sati->numSAP			= ($dato[1] != '')	? $dato[1]											: null ;
		// 			$sati->nombre			= ($dato[2] != '')	? $dato[2]											: null ;
		// 			$sati->nombre2			= ($dato[3] != '')	? $dato[3]											: null ;
		// 			$sati->apPaterno		= ($dato[4] != '')	? $dato[4]											: null ;
		// 			$sati->apMaterno		= ($dato[5] != '')	? $dato[5]											: null ;
		// 			$sati->userID			= ($dato[6] != '')	? $dato[6]											: null ;
		// 			$sati->fTerminoContrato	= ($dato[7] != '')	? Carbon::createFromFormat('d-m-y H:i', $dato[7])	: null ;
		// 			$sati->cecoGrafo		= ($dato[8] != '')	? $dato[8]											: 'ERROR' ;
		// 			$sati->TipoContrato_id	= ($dato[9] != '')	? 0													: 0 ;
		// 			$sati->Contrato_id		= ($dato[10] != '')	? 0													: 0 ;
		// 			$sati->Estado_id		= ($dato[11] != '')	? Estado::where('nombre', $dato[11])->value('id')	: null ;
		// 			$sati->save();
		// 		} catch (Exception $e) {

		// 		}
		// 	}
		// } else {
		// 	return redirect()->back();
		// }

		// return redirect()->route('dashboard.index');
	}
}
