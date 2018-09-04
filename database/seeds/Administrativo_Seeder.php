<?php

use App\AdmN1;
use App\AdmN2;
use App\AdmN3;
use App\AdmN4;
use App\Administrativo;

use Illuminate\Database\Seeder;

class Administrativo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Administrativo::truncate();

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión de Seguridad')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Caminata Paritaria')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión Comité Paritario')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Liderazgo en Terreno')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión de Tronadura')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Checklist de Herramientas')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Checklist de Vehiculos')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Operación')
			->where('AdmN4.nombre', 'Reunión de Operaciones')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Operación')
			->where('AdmN4.nombre', 'Difusiones')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'ESP')
			->where('AdmN3.nombre', 'Operación')
			->where('AdmN4.nombre', 'Reunión de Tareas Criticas')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión de Seguridad')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Caminata Paritaria')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión de Comité Paritario')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Liderazgo en Terreno')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Reunión de Tronadura')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Participar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Checklist de Herramientas')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);

		$catID = AdmN4::
			join('AdmN3', 'AdmN3.id', '=', 'AdmN4.AdmN3_id')
			->join('AdmN2', 'AdmN2.id', '=', 'AdmN3.AdmN2_id')
			->join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
			->select('AdmN4.id', 'AdmN4.nombre', 'AdmN3.nombre', 'AdmN2.nombre', 'AdmN1.nombre')
			->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
			->where('AdmN2.nombre', 'MET')
			->where('AdmN3.nombre', 'Seguridad')
			->where('AdmN4.nombre', 'Checklist de Vehiculos')
			->first()->id;

		Administrativo::create([
			'nombre' => 'Realizar',
			'AdmN4_id' => $catID,
		]);
    }
}
