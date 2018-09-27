<?php

use App\TipoBase;
use Illuminate\Database\Seeder;

class TipoBase_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoBase::truncate();

		TipoBase::create([
			'nombre' => 'Oficina'
		]);
		TipoBase::create([
			'nombre' => 'Consola'
		]);
		TipoBase::create([
			'nombre' => 'Despacho'
		]);
	}
}
