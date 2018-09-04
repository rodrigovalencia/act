<?php

use App\AdmN1;
use App\AdmN2;

use Illuminate\Database\Seeder;

class AdmN2_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	AdmN2::truncate();

		$catID = AdmN1::where('nombre', 'GESTION ADMINISTRATIVA')->value('id');

		AdmN2::create([
			'nombre' => 'ESP',
			'AdmN1_id' => $catID,
		]);

		AdmN2::create([
			'nombre' => 'MET',
			'AdmN1_id' => $catID,
		]);
    }
}
