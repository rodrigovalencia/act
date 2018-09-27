<?php

use App\CatN1;

use Illuminate\Database\Seeder;

class CatN1_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		CatN1::truncate();
		
		CatN1::create([
			'nombre' => 'INCIDENTES'
		]);
		
		CatN1::create([
			'nombre' => 'REQUERIMIENTOS'
		]);
	}
}
