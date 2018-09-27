<?php

use App\Fabricante;
use App\Fabricante_TipoActivo;
use App\TipoActivo;
use Illuminate\Database\Seeder;

class FabricanteSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Fabricante::truncate();
		Fabricante_TipoActivo::truncate();

		$tipoID = TipoActivo::where('nombre', 'RadioTrabajo')->first()->id;

		$fabricante = Fabricante::create([
			'nombre' => 'MOTOROLA',
		]);

		Fabricante_TipoActivo::create([
			'Fabricante_id' => $fabricante->id,
			'TipoActivo_id' => $tipoID,
		]);

		$fabricante = Fabricante::create([
			'nombre' => 'KENWOOD',
		]);

		Fabricante_TipoActivo::create([
			'Fabricante_id' => $fabricante->id,
			'TipoActivo_id' => $tipoID,
		]);

		$fabricante = Fabricante::create([
			'nombre' => 'ASTRON',
		]);

		Fabricante_TipoActivo::create([
			'Fabricante_id' => $fabricante->id,
			'TipoActivo_id' => $tipoID,
		]);

		$fabricante = Fabricante::create([
			'nombre' => 'SEPURA',
		]);

		Fabricante_TipoActivo::create([
			'Fabricante_id' => $fabricante->id,
			'TipoActivo_id' => $tipoID,
		]);

		$fabricante = Fabricante::create([
			'nombre' => 'AIRBUS',
		]);

		Fabricante_TipoActivo::create([
			'Fabricante_id' => $fabricante->id,
			'TipoActivo_id' => $tipoID,
		]);
	}
}
