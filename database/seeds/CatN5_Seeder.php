<?php

use Illuminate\Database\Seeder;

class CatN5_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		CatN5::truncate();

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->first()->id;

		CatN5::create([
			'nombre' => 'Grabaciones',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Repetidores',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->first()->id;

		CatN5::create([
			'nombre' => 'Grabaciones',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Repetidores',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Radio Comercial')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CASS')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'SOM')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->where('CatN4.nombre', 'CBOX')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Postes')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;
		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->first()->id;

		CatN5::create([
			'nombre' => 'Grabaciones',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Repetidores',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;
		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Asignación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Nextiva')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Securos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Asignación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;
		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Asignación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Carros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Traslado',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->where('CatN4.nombre', 'Torres')
			->first()->id;

		CatN5::create([
			'nombre' => 'Mantención Preventiva',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Mantención Correctiva',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Sitios')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Equipos Mineros')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Vehiculos Livianos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->where('CatN4.nombre', 'Terminales')
			->first()->id;

		CatN5::create([
			'nombre' => 'Asignación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Programación',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->where('CatN4.nombre', 'Producción')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Cableado UTP')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Fibra Optica')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->where('CatN4.nombre', 'Control de Acceso')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Monitoreo')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->where('CatN4.nombre', 'Bombeo')
			->first()->id;

		CatN5::create([
			'nombre' => 'Instalación',
			'CatN4_id' => $catID,
		]);
		CatN5::create([
			'nombre' => 'Retiro',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión de Seguridad')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Caminata Paritaria')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión Comité Paritario')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Liderazgo en Terreno')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión de Tronadura')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Checklist de Herramientas')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Checklist de Vehiculos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Operación')
			->where('CatN4.nombre', 'Reunión de Operaciones')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Operación')
			->where('CatN4.nombre', 'Difusiones')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Operación')
			->where('CatN4.nombre', 'Reunión de Tareas Criticas')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión de Seguridad')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Caminata Paritaria')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión de Comité Paritario')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Liderazgo en Terreno')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Reunión de Tronadura')
			->first()->id;

		CatN5::create([
			'nombre' => 'Participar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Checklist de Herramientas')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);

		$catID = CatN4::
			join('CatN3', 'CatN3.id', '=', 'CatN4.CatN3_id')
			->join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN4.id', 'CatN4.nombre', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->where('CatN4.nombre', 'Checklist de Vehiculos')
			->first()->id;

		CatN5::create([
			'nombre' => 'Realizar',
			'CatN4_id' => $catID,
		]);
    }
}