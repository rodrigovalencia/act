<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class TerminalesExportView implements FromView
{
	use Exportable;

	public function view(): View
	{
		return view('reportes.pdf.terminales');
		// return view('exports.invoices', ['invoices' => Invoice::all()]);
	}
}