<?php

use App\CatCodelco;

use Illuminate\Database\Seeder;

class CatCodelco_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		CatCodelco::truncate();

		CatCodelco::create([
			'nombre' => 'Llamado'
		]);

		CatCodelco::create([
			'nombre' => 'Instalación'
		]);

		CatCodelco::create([
			'nombre' => 'Desinstalación'
		]);

		CatCodelco::create([
			'nombre' => 'Programación'
		]);

		CatCodelco::create([
			'nombre' => 'Trabajo Menor'
		]);

		CatCodelco::create([
			'nombre' => 'Diagnóstico'
		]);
    }
}
