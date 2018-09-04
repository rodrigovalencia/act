<?php

use App\CatN1;
use App\CatN2;

use Illuminate\Database\Seeder;

class CatN2_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	CatN2::truncate();
		
		$catID = CatN1::where('nombre', 'INCIDENTES')->value('id');

		CatN2::create([
			'nombre' => 'ESP',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'MET',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'OXE',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'MUELLE / SIAM',
			'CatN1_id' => $catID,
		]);

		$catID = CatN1::where('nombre', 'REQUERIMIENTOS')->value('id');

		CatN2::create([
			'nombre' => 'ESP',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'MET',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'OXE',
			'CatN1_id' => $catID,
		]);

		CatN2::create([
			'nombre' => 'MUELLE / SIAM',
			'CatN1_id' => $catID,
		]);
    }
}
