<?php

namespace App\Http\Controllers\impresion;

use App\Exports\TerminalesExportViewv;
use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImpresoraController extends Controller
{
	public function test()
	{
		return view('impresion.test');
	}
}