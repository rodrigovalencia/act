<?php

use Illuminate\Database\Seeder;

class CatN4_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		CatN4::truncate();

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Monitoreo',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Nextiva',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Securos',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CASS / SOM')
			->first()->id;

		CatN4::create([
			'nombre' => 'CASS',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'SOM',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'CBOX',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Torres',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Monitoreo',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Radio Comercial')
			->first()->id;

		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Producción',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CASS / SOM')
			->first()->id;

		CatN4::create([
			'nombre' => 'CASS',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'SOM',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'CBOX',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Postes',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Monitoreo',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Torres',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Nextiva',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Securos',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'INCIDENTES')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')	
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Vehiculos Livianos',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Nextiva',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Securos',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Torres',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Vehiculos Livianos',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Producción',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Vehiculos Livianos',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Producción',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'OXE')
			->where('CatN3.nombre', 'Red Mina')
			->first()->id;

		CatN4::create([
			'nombre' => 'Carros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Torres',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'RadioComunicaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Sitios',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Equipos Mineros',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Vehiculos Livianos',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Terminales',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'CCTV')
			->first()->id;

		CatN4::create([
			'nombre' => 'Producción',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Infraestructura')
			->first()->id;

		CatN4::create([
			'nombre' => 'Cableado UTP',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Fibra Optica',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Control de Acceso',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'REQUERIMIENTOS')
			->where('CatN2.nombre', 'MUELLE / SIAM')
			->where('CatN3.nombre', 'Estaciones')
			->first()->id;

		CatN4::create([
			'nombre' => 'Monitoreo',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Bombeo',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Seguridad')
			->first()->id;

		CatN4::create([
			'nombre' => 'Reunión de Seguridad',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Caminata Paritaria',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Reunión Comité Paritario',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Liderazgo En Terreno',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Reunión de Tronadura',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Checklist de Herramientas',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Checklist de Vehiculos',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'ESP')
			->where('CatN3.nombre', 'Operación')
			->first()->id;

		CatN4::create([
			'nombre' => 'Reunión de Operaciones',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Difusiones',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Reunion Tareas Criticas',
			'CatN3_id' => $catID,
		]);

		$catID = CatN3::
			join('CatN2', 'CatN2.id', '=', 'CatN3.CatN2_id')
			->join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
			->select('CatN3.id', 'CatN3.nombre', 'CatN2.nombre', 'CatN1.nombre')
			->where('CatN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('CatN2.nombre', 'MET')
			->where('CatN3.nombre', 'Seguridad')
			->first()->id;

		CatN4::create([
			'nombre' => 'Reunión de Seguridad',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Caminata Paritaria',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Reunión Comité Paritario',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Liderazgo En Terreno',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Reunión de Tronadura',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Checklist de Herramientas',
			'CatN3_id' => $catID,
		]);
		CatN4::create([
			'nombre' => 'Checklist de Vehiculos',
			'CatN3_id' => $catID,
		]);
	}
}