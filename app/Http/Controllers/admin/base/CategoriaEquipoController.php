<?php

namespace App\Http\Controllers\admin\base;

use App\CatEquipo;
use App\Http\Controllers\Controller;

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
