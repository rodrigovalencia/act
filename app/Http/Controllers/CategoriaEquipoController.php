<?php

namespace App\Http\Controllers;

use App\CatEquipo;
use Illuminate\Http\Request;

class CategoriaEquipoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categorias = CatEquipo::all();
		return view('admin.base.catEquipo.index', compact('categorias'));
	}
}
