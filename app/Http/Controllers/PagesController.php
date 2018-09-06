<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	function index(){
		return view('index');
	}

	function cargarSATI(){
		return view('admin.SATI.getCSV');
	}

	function inspeccionarSATI(){
		return view('admin.SATI.showCSV');
	}

	function guardarSATI(){
		return view('admin.SATI.showCSV');
	}
}
