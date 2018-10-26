<?php

namespace App\Http\Controllers\ajax;

use App\Faena;
use App\Http\Controllers\Controller;
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
	}
}
