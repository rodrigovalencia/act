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
		
		Sistema::create(['nombre' => 'P25 - TRUNKING']);
		Sistema::create(['nombre' => 'P16 - TRUNKING']);
		Sistema::create(['nombre' => 'VHF']);
    }
}
