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

		//Radios de Trabajo
		$tipoID = TipoActivo::where('nombre', 'RadioTrabajo')->first()->id;
		Fabricante::create(['nombre' => 'MOTOROLA']) -> tiposActivos() -> attach($tipoID);
		Fabricante::create(['nombre' => 'KENWOOD'])  -> tiposActivos() -> attach($tipoID);
		Fabricante::create(['nombre' => 'ASTRON'])   -> tiposActivos() -> attach($tipoID);
		Fabricante::create(['nombre' => 'SEPURA'])   -> tiposActivos() -> attach($tipoID);
		Fabricante::create(['nombre' => 'AIRBUS'])   -> tiposActivos() -> attach($tipoID);
	}
}
