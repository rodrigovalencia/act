<?php

namespace App\Exports;

use App\RadioTrabajo;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UAsignadosExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
	use Exportable;

	public function __construct(int $id)
	{
		$this->id = $id;
	}

	public function query()
	{
		return RadioTrabajo::
			where('Mandante_id', $this->id)
			->with(
				'mandante',
				'area.ubicacion',
				'contrato.empresa',
				'ubicacionRadio',
				'activo.estado'
			);
	}

	public function map($radio): array
	{
		return [
			$radio->mandante->getNombreCompleto(),
			$radio->mandante->userID,
			$radio->mandante->cecoGrafo,
			$radio->serie,
			$radio->idSistema,
			$radio->area->ubicacion->nombre,
			$radio->contrato->empresa->nombre,
			$radio->ubicacionRadio->getNombre(),
			$radio->activo->estado->nombre
		];
	}

	public function headings(): array
	{
		return [
			'Nombre',
			'User ID',
			'CECO',
			'Serie',
			'ID Sistema',
			'Ubicacion',
			'Empresa',
			'Lugar de Instalacion',
			'Estado'
		];
	}
}