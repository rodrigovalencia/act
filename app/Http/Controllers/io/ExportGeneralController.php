<?php

namespace App\Http\Controllers\io;

use App\Exports\TerminalesExport;
use App\Exports\TerminalesExportView;
use App\Http\Controllers\Controller;

class ExportGeneralController extends Controller
{
	function terminalesCSV(){
		return (new TerminalesExport)->download('terminales.csv');
	}
	function terminalesXLSX(){
		return (new TerminalesExport)->download('terminales.xlsx');
	}
	function terminalesPDF(){
		return (new TerminalesExportView)->download('terminales.pdf');
	}
}
