<?php

use App\Faena;
use App\Ubicacion;
use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Ubicacion::truncate()

    	$id = Faena::where('nombre','CODELCO NORTE')->value('id');

		Ubicacion::create([
			'nombre' =>'División Chuquicamata',
			'Faena_id' => $id,
		]);

		Ubicacion::create([
			'nombre' =>'División Gabriela Mistral',
			'Faena_id' => $id,
		]);

		Ubicacion::create([
			'nombre' =>'División Ministro Hales',
			'Faena_id' => $id,
		]);

		Ubicacion::create([
			'nombre' =>'División Radomiro Tomic',
			'Faena_id' => $id,
		]);

		Ubicacion::create([
			'nombre' =>'Vicepresidencia de Proyectos',
			'Faena_id' => $id,
		]);

    }
}
