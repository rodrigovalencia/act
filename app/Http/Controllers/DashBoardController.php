<?php

namespace App\Http\Controllers;

use App\RadioTrabajo;
use App\TipoActivo;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
	public function index()
	{
	    return view('dashboard.index');
	}

	public function inventario()
	{
		$tipos = TipoActivo::all()->pluck('nombre');
		$radiosTrabajo = RadioTrabajo::all();
		
	    return view('dashboard.inventario', compact('tipos', 'radiosTrabajo'));
	}
}
