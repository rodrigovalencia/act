<?php

use App\TipoModelo;
use Illuminate\Database\Seeder;

class TipoModeloSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoModelo::truncate();
		
		TipoModelo::create(['nombre' => 'MOVIL']);
		TipoModelo::create(['nombre' => 'PORTATIL']);
		TipoModelo::create(['nombre' => 'BASE']);
	}
}
