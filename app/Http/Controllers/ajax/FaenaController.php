<?php

namespace App\Http\Controllers\ajax;

use App\CategoriaTicket;
use App\Faena;
use App\Http\Controllers\Controller;
use App\RadioTrabajo;
use App\TipoActivo;
use App\Ubicacion;

class FaenaController extends Controller
{
	public function ubicaciones($id)
	{
		$ubicaciones = Faena::findOrFail($id)->ubicaciones;
		return response()->json($ubicaciones);
	}
	public function areas($id)
	{
		$areas = Ubicacion::findOrFail($id)->areas;
		return response()->json($areas);
	}
	public function subCategoriasTicket($cadena)
	{
		$cadena = 'App\\' . $cadena;
		$categorias = CategoriaTicket::where('categoria_type', $cadena)->get();
		$datos= array();
		foreach ($categorias as $subCategoria) {
			$datos[] = array("nombre" => $subCategoria->getNombre(),"id"=>$subCategoria->id);
		}

		return response()->json($datos);
	}
	public function buscarActivo($id,$activeType)
	{
		switch ($activeType) {
			case 'RadioTrabajo':
				$activos = RadioTrabajo::where('serie', $id)->get();
				if($activos->isNotEmpty()){
					$empresa = $activos->first()->contrato->empresa->nombre;
					$serie = $activos->first()->serie;
					$datos = array("serie"=> $activos->first()->serie, "empresa"=>$activos->first()->contrato->empresa->nombre);
					return response()->json($datos);
				}
				else{
					return NULL;
				}
			break;
		}
	}
}
