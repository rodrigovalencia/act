<?php

namespace App\Imports;

use App\SATI;
use App\Usuario;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class SATIImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
	use Importable;

	/**
	* @param array $row
	*
	* @return \Illuminate\Database\Eloquent\Model|null
	*/
	public function model(array $row)
	{
		// dd($row);
		// (isset($row['TipoContrato_id'])) ? dd('yes') : dd('no') ;
		// dd((isset($row['apMaterno']))  ? $row['apMaterno']  : 0);



		$sati = new SATI();
		$sati->rut				= ($row['rut'] != '')	? $dato[0]											: null ;
		$sati->numSAP			= ($row['numSAP'] != '')	? $dato[1]											: null ;
		$sati->nombre			= ($row['nombre'] != '')	? $dato[2]											: null ;
		$sati->nombre2			= ($row['nombre2'] != '')	? $dato[3]											: null ;
		$sati->apPaterno		= ($row['apPaterno'] != '')	? $dato[4]											: null ;
		$sati->apMaterno		= ($row['apMaterno'] != '')	? $dato[5]											: null ;
		$sati->userID			= ($row['userID'] != '')	? $dato[6]											: null ;
		$sati->fTerminoContrato	= ($row['fTerminoContrato'] != '')	? Carbon::createFromFormat('d-m-y H:i', $dato[7])	: null ;
		$sati->cecoGrafo		= ($row['cecoGrafo'] != '')	? $dato[8]											: 'ERROR' ;
		$sati->TipoContrato_id	= ($row['TipoContrato_id'] != '')	? 0													: 0 ;
		$sati->Contrato_id		= ($row['Contrato_id'] != '')	? 0													: 0 ;
		$sati->Estado_id		= ($row['Estado_id'] != '')	? Estado::where('nombre', $dato[11])->value('id')	: null ;
		$sati->save();








		// if (isset($row['fTerminoContrato'])) {
		// 	$fecha = Carbon::createFromFormat('d-m-y H:i', $row['fTerminoContrato']);
		// } else {
		// 	$fecha = now();
		// }
		
		// return new SATI([
		// 	'rut'              => (isset($row['rut']))              ? $row['rut']                                             : 0,			
		// 	'numSAP'           => (isset($row['numSAP']))           ? $row['numSAP']                                          : null,
		// 	'nombre'           => (isset($row['nombre']))           ? $row['nombre']                                          : '',
		// 	'nombre2'          => (isset($row['nombre2']))          ? $row['nombre2']                                         : null,
		// 	'apPaterno'        => (isset($row['apPaterno']))        ? $row['apPaterno']                                       : '',
		// 	'apMaterno'        => (isset($row['apMaterno']))        ? $row['apMaterno']                                       : null,
		// 	'userID'           => (isset($row['userID']))           ? $row['userID']                                          : 0,
		// 	'fTerminoContrato' => $fecha,
		// 	'TipoContrato_id'  => (isset($row['TipoContrato_id']))  ? $row['TipoContrato_id']  : '0',
		// 	'Contrato_id'      => 0, //(isset($row['Contrato_id']))      ? $row['Contrato_id']      : '0',
		// 	'Estado_id'        => (isset($row['Estado_id']))        ? Estado::where('nombre', $row['Estado_id'])->value('id') : '0',
		// 	'cecoGrafo'        => (isset($row['cecoGrafo']))        ? $row['cecoGrafo']                                       : 'ERROR',
		// ]);

			// 'rut'?(!isset($row[0])) ? 0       : $row['rut'],&
			// 'numSAP'?(!isset($row[1])) ? null    : $row[1],&
			// 'nombre'?(!isset($row[2])) ? ''      : $row[2],&
			// 'nombre2'?(!isset($row[3])) ? null    : $row[3],&
			// 'apPaterno'?(!isset($row[4])) ? ''      : $row[4],&
			// 'apMaterno'?(!isset($row[5])) ? null    : $row[5],&
			// 'userID'?(!isset($row[6])) ? 0       : $row[6],&
			// 'fTerminoContrato'?(!isset($row[7])) ? Carbon::now() : Carbon::createFromFormat('d-m-y H:i', $row[7]),&
			// 'cecoGrafo'?(!isset($row[8])) ? 'ERROR' : $row[8],&
			// 'TipoContrato_id'?(!isset($row[9])) ? 0       : 0,&
			// 'Contrato_id'?(!isset($row[10])) ? 0       : 0,&
			// 'Estado_id'?(!isset($row[11])) ? 0       : Estado::where('nombre', $row[11])->value('id')&
		// return factory(SATI::class)->create();
		// return null;
		// return new Usuario([
		//     'rut' => 1,
		//     'pass' => '1'
		// ]);


		//			$sati->rut				= ($dato[0] != '')	? $dato[0]											: null ;
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

	}

	public function getCsvSettings(): array
	{
		return [
			'input_encoding' => 'ISO-8859-1',
			'delimiter' => ';'
		];
	}
}
