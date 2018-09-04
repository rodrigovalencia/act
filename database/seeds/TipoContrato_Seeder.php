<?php

use App\TipoContrato;
use Illuminate\Database\Seeder;

class TipoContrato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		TipoContrato::truncate();

		TipoContrato::create([
			'nombre' => 'Entrenamiento'
		]);
		TipoContrato::create([
			'nombre' => 'Estudiante'
		]);
		TipoContrato::create([
			'nombre' => 'Ex - Trabajador'
		]);
		TipoContrato::create([
			'nombre' => 'Externo'
		]);
		TipoContrato::create([
			'nombre' => 'Indefinido Codelco'
		]);
		TipoContrato::create([
			'nombre' => 'Obra/Servicio'
		]);
		TipoContrato::create([
			'nombre' => 'Temporal Plazo Fijo'
		]);
    }
}
