<?php

use App\Sistema;
use Illuminate\Database\Seeder;

class SistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sistema::truncate();

        Sistema::create([
        	'nombre' => 'TRUNKING'
        ]);

		Sistema::create([
			'nombre' => 'VHF'
		]);
    }
}
