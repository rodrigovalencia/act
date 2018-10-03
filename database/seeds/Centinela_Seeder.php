<?php

use App\CatN1;
use App\CatN2;
use App\CatN3;
use App\CatN4;
use App\CatN5;
use App\Centinela;

use Illuminate\Database\Seeder;

class Centinela_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Centinela::truncate();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Grabaciones')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Repetidores')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Grabaciones')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Repetidores')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Radio Comercial')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Radio Comercial')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Postes')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Postes')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Grabaciones')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Repetidores')
			->first()->id;

		Centinela::create([
			'nombre' => 'Revisión',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Asignación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Entrega',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Asignación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Entrega',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Asignación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Entrega',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->where('CatN5.nombre', 'Traslado')
			->first()->id;

		Centinela::create([
			'nombre' => 'Cobertura',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Tronadura',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Preventiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->where('CatN5.nombre', 'Mantención Correctiva')
			->first()->id;

		Centinela::create([
			'nombre' => 'Mantenimiento',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		Centinela::create([
			'nombre' => 'Reparación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;


		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Asignación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Entrega',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->where('CatN5.nombre', 'Programación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Programación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();
		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Bombeo')
			->where('CatN5.nombre', 'Instalación')
			->first()->id;

		Centinela::create([
			'nombre' => 'Instalación',
			'CatN5_id' => $catID,
		])->catTicket()->create();

		$catID = CatN5::
			join('CatN4', 'CatN4.id', '=', 'CatN5.CatN4_id')
			->join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Bombeo')
			->where('CatN5.nombre', 'Retiro')
			->first()->id;

		Centinela::create([
			'nombre' => 'Retiro',
			'CatN5_id' => $catID,
		])->catTicket()->create();
	}
}