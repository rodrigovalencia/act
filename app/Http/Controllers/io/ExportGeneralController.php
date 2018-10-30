<?php

namespace App\Http\Controllers\io;

use App\Exports\TerminalesExportView;
use App\Exports\UAsignadosExport;
use App\Exports\VAsignadosExport;
use App\Http\Controllers\Controller;

class ExportGeneralController extends Controller
{
	//CAMBIAR LOS ID
	function uAsigCSV(){
		return (new UAsignadosExport(4101))->download('UAsignados.csv');
	}
	function uAsigXLSX(){
		return (new UAsignadosExport(4101))->download('UAsignados.xlsx');
	}
	function uAsigPDF(){
		return (new TerminalesExportView)->download('UAsignados.pdf');
	}
	function vAsigCSV(){
		return (new VAsignadosExport)->download('VAsignados.csv');
	}
	function vAsigXLSX(){
		return (new VAsignadosExport)->download('VAsignados.xlsx');
	}
	function vAsigPDF(){
		return (new TerminalesExportView)->download('UAsignados.pdf');
	}
}
