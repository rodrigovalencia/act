<?php

namespace App\Exports;

use App\RadioTrabajo;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VAsignadosExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
	use Exportable;

	public function query()
	{
		return RadioTrabajo::
			join('URadio', 'URadio.id', '=', 'RadioTrabajo.URadio_id')
			->select('RadioTrabajo.*')
			->where('URadio.ubicable_type', 'Equipo')
			->with('modeloRadio', 'area.ubicacion', 'contrato.empresa', 'ubicacionRadio');
	}

	public function map($radio): array
	{
		return [
			$radio->serie,
			$radio->idSistema,
			$radio->modeloRadio->nombre,
			$radio->area->ubicacion->nombre,
			$radio->contrato->empresa->nombre,
			$radio->ubicacionRadio->getNombre()
		];
	}

	public function headings(): array
	{
		return [
			'Serie',
			'ID Sistema',
			'Modelo Radio',
			'Ubicacion',
			'Empresa',
			'Lugar de Instalacion'
		];
	}
}