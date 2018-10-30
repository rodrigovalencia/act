<?php

namespace App\Http\Controllers\io;

use App\Http\Controllers\Controller;

class ExportController extends Controller
{
	function index(){
		return view('reportes.index');
	}
}
