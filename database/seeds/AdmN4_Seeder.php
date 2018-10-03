<?php

use App\AdmN1;
use App\AdmN2;
use App\AdmN3;
use App\AdmN4;

use Illuminate\Database\Seeder;

class AdmN4_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		AdmN4::truncate();

		$catID = AdmN3::
		join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
		->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
		->select('AdmN3.id', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
		->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
		->where('AdmN2.nombre', 'ESP')
		->where('AdmN3.nombre', 'Seguridad')
		->first()->id;

		AdmN4::create([
			'nombre' => 'Reunión de Seguridad',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Caminata Paritaria',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Reunión Comité Paritario',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Liderazgo En Terreno',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Reunión de Tronadura',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Checklist de Herramientas',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Checklist de Vehiculos',
			'AdmN3_id' => $catID,
		]);

		$catID = AdmN3::
		join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
		->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
		->select('AdmN3.id', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
		->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
		->where('AdmN2.nombre', 'ESP')
		->where('AdmN3.nombre', 'Operación')
		->first()->id;

		AdmN4::create([
			'nombre' => 'Reunión de Operaciones',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Difusiones',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Reunion Tareas Criticas',
			'AdmN3_id' => $catID,
		]);

		$catID = AdmN3::
		join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
		->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
		->select('AdmN3.id', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
		->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
		->where('AdmN2.nombre', 'MET')
		->where('AdmN3.nombre', 'Seguridad')
		->first()->id;

		AdmN4::create([
			'nombre' => 'Reunión de Seguridad',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Caminata Paritaria',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Reunión Comité Paritario',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Liderazgo En Terreno',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Reunión de Tronadura',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Checklist de Herramientas',
			'AdmN3_id' => $catID,
		]);
		AdmN4::create([
			'nombre' => 'Checklist de Vehiculos',
			'AdmN3_id' => $catID,
		]);
	}
}
