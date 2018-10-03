<?php


use App\CatCodelco;
use App\Codelco;

use Illuminate\Database\Seeder;

class Codelco_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Codelco::truncate();

		$catID = CatCodelco::where('nombre', 'Programación')->value('id');

		Codelco::create([
			'nombre' => 'Reprogramación',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Normalización',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Reasignación',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Regularización',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Desprogramación',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		

		$catID = CatCodelco::where('nombre', 'Trabajo Menor')->value('id');

		Codelco::create([
			'nombre' => 'Limpieza',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Cambio de Pieza',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Reparación Electrónica',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Mantención General',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		

		$catID = CatCodelco::where('nombre', 'Diagnóstico')->value('id');

		Codelco::create([
			'nombre' => 'Robo',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Falla',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Extravío',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Bloqueo',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Fin Contrato',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Baja',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
		Codelco::create([
			'nombre' => 'Devolución',
			'CatCodelco_id' => $catID,
		])->catTicket()->create();
		
	}
}
