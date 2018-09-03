<?php

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

    	Faena::create([
    		'nombre' => 'CODELCO NORTE'
    	]);
    }
}
