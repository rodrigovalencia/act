<?php

namespace App\Exports;

use App\Usuario;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TerminalesExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
	use Exportable;

	public function query()
	{
		return Usuario::with('rol');
	}

	public function map($usuario): array
	{
		return [
			$usuario->rut,
			$usuario->nombre,
			$usuario->apPaterno,
			$usuario->apMaterno,
			$usuario->mail,
			$usuario->rol->nombre
		];
	}

	public function headings(): array
	{
		return [
			'rut',
			'nombre',
			'apPaterno',
			'apMaterno',
			'mail',
			'nombre'
		];
	}
}