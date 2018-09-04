<?php

use App\AdmN1;

use Illuminate\Database\Seeder;

class AdmN1_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		AdmN1::truncate();

		AdmN1::create([
			'nombre' => 'GESTION ADMINISTRATIVA'
		]);
    }
}
