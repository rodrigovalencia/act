<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Categoria::truncate();

		//Claudia Rojos
		//APR - Asesor Prevencion de Riesgos
		//Calama


		// Esperar respuesta de Claudia

		Categoria::create(['nombre'=>'Administración de Riesgos']);
		Categoria::create(['nombre'=>'Charla']);
		Categoria::create(['nombre'=>'Orientacion']);
		Categoria::create(['nombre'=>'Conduccion']);
		Categoria::create(['nombre'=>'Protocolo']);
	}
}
