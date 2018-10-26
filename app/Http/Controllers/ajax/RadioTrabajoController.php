<?php

namespace App\Http\Controllers\ajax;

use App\CatEquipo;
use App\Fabricante;
use App\ModeloRadio;
use App\TipoBase;
use App\TipoEquipo;
use App\Ubicacion;
use App\Http\Controllers\Controller;

class RadioTrabajoController extends Controller
{
	public function modelos($id)
	{
		$modelos = Fabricante::findOrFail($id)->modelosRadio->pluck('nombre', 'id');
		return response()->json($modelos);
	}
	public function sistemas($id)
	{
		$sistemas = ModeloRadio::findOrFail($id)->sistemas;
		return response()->json($sistemas);
	}
	public function areas($id)
	{
		$areas = Ubicacion::findOrFail($id)->areas;
		return response()->json($areas);
	}
	public function bases($id)
	{
		$bases = TipoBase::findOrFail($id)->bases;
		return response()->json($bases);
	}
	public function tiposEquipos($id)
	{
		$tiposEquipos = CatEquipo::findOrFail($id)->tiposEquipos;
		return response()->json($tiposEquipos);
	}
	public function equipos($id)
	{
		$equipos = TipoEquipo::findOrFail($id)->equipos;
		return response()->json($equipos);
	}
}
