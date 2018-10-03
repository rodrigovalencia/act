<?php

use App\Estado;
use Illuminate\Database\Seeder;

class Estado_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Estado::truncate();
		
		Estado::create(['nombre' => 'RETIRADO']);
		Estado::create(['nombre' => 'VIGENTE']);
    }
}
