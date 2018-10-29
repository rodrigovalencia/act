<?php

namespace App\Http\Controllers\ajax;

use App\CatEquipo;
use App\Fabricante;
use App\ModeloRadio;
use App\TipoBase;
use App\TipoEquipo;
use App\Ubicacion;
use App\Sistema;
use App\URadio;
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
		$sistemas = ModeloRadio::findOrFail($id)->sistemas->pluck('nombre', 'id');
		return response()->json($sistemas);
	}
	public function expReg($id)
	{
		$expReg = Sistema::findOrFail($id)->expReg;
		return response()->json($expReg);
	}
	public function areas($id)
	{
		$areas = Ubicacion::findOrFail($id)->areas->pluck('nombre', 'id');
		return response()->json($areas);
	}
	public function tiposUbicaciones($id)
	{
		$tipos = Ubicacion::findOrFail($id)->ubicacionesRadios->pluck('ubicable_type')->unique();
		return response()->json($tipos);
	}

	public function tiposBases($id)
	{
		$tipos = TipoBase::
			join('Base', 'Base.TipoBase_id', '=', 'TipoBase.id')
			->join('URadio', 'URadio.ubicable_id', '=', 'Base.id')
			->select('TipoBase.id', 'TipoBase.nombre')
			->where('URadio.ubicable_type', 'Base')
			->where('URadio.Ubicacion_id', $id)
			->get()->unique()->pluck('nombre', 'id');
		return response()->json($tipos);
	}
	public function bases($T_id, $U_id)
	{
		//REVISAR!!!!
		$bases = URadio::
			join('Base', 'Base.id', '=', 'URadio.ubicable_id')
			->join('TipoBase', 'TipoBase.id', '=', 'Base.TipoBase_id')
			->select('URadio.id', 'Base.direccion')
			->where('URadio.Ubicacion_id', $U_id)
			->where('TipoBase.id', $T_id)
			->get()->unique()->pluck('direccion', 'id');
		return response()->json($bases);
	}

	public function categoriasEquipos($id)
	{
		$categorias = CatEquipo::
			join('TipoEquipo', 'TipoEquipo.CatEquipo_id', '=', 'CatEquipo.id')
			->join('Equipo', 'Equipo.TipoEquipo_id', '=', 'TipoEquipo.id')
			->join('URadio', 'URadio.ubicable_id', '=', 'Equipo.id')
			->select('CatEquipo.id', 'CatEquipo.nombre')
			->where('URadio.ubicable_type', 'Equipo')
			->where('URadio.Ubicacion_id', $id)
			->get()->unique()->pluck('nombre', 'id');
		return response()->json($categorias);
	}
	public function tiposEquipos($C_id, $U_id)
	{
		//REVISAR!!!!
		$tipos = URadio::
			join('Equipo', 'Equipo.id', '=', 'URadio.ubicable_id')
			->join('TipoEquipo', 'TipoEquipo.id', '=', 'Equipo.TipoEquipo_id')
			->join('CatEquipo', 'CatEquipo.id', '=', 'TipoEquipo.CatEquipo_id')
			->select('TipoEquipo.id', 'TipoEquipo.nombre')
			->where('URadio.Ubicacion_id', $U_id)
			->where('CatEquipo.id', $C_id)
			->get()->unique()->pluck('nombre', 'id');
		return response()->json($tipos);
	}
	public function equipos($T_id, $U_id)
	{
		//REVISAR!!!!
		$equipos = URadio::
			join('Equipo', 'Equipo.id', '=', 'URadio.ubicable_id')
			->join('TipoEquipo', 'TipoEquipo.id', '=', 'Equipo.TipoEquipo_id')
			->select('URadio.id', 'Equipo.numero')
			->where('URadio.Ubicacion_id', $U_id)
			->where('TipoEquipo.id', $T_id)
			->get()->unique()->pluck('numero', 'id');
		return response()->json($equipos);
	}
}
