<?php

use App\TipoActivo;
use Illuminate\Database\Seeder;

class TipoActivoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoActivo::truncate();

		TipoActivo::create([
			'nombre' => 'CCTV',
		]);

		TipoActivo::create([
			'nombre' => 'Computador',
		]);

		TipoActivo::create([
			'nombre' => 'DispRed',
		]);

		TipoActivo::create([
			'nombre' => 'RadioComercial',
		]);

		TipoActivo::create([
			'nombre' => 'RadioTrabajo',
		]);

		TipoActivo::create([
			'nombre' => 'Impresora',
		]);

		TipoActivo::create([
			'nombre' => 'Monitor',
		]);

		TipoActivo::create([
			'nombre' => 'Celular',
		]);

		TipoActivo::create([
			'nombre' => 'CableRadiante',
		]);

		TipoActivo::create([
			'nombre' => 'CarroAmplificacion',
		]);

		TipoActivo::create([
			'nombre' => 'Repetidor',
		]);
	}
}
