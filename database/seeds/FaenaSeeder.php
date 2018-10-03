<?php

use App\DominioContrato;
use App\Faena;
use Illuminate\Database\Seeder;

class FaenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Faena::truncate();
    	DominioContrato::truncate();
    	
		Faena::create(['nombre' => 'CODELCO NORTE'])->dominio()->create();
    }
}
