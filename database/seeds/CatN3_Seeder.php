<?php

use App\CatN1;
use App\CatN2;
use App\CatN3;

use Illuminate\Database\Seeder;

class CatN3_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		CatN3::truncate();

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'INCIDENTES')
		->where('CatN2.nombre', 'ESP')
		->first()->id;

		// $catID = CatN2::where('nombre','ESP')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'INCIDENTES';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CASS / SOM',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'INCIDENTES')
		->where('CatN2.nombre', 'MET')
		->first()->id;

		// $catID = CatN2::where('nombre','MET')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'INCIDENTES';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Radio Comercial',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CASS / SOM',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'INCIDENTES')
		->where('CatN2.nombre', 'OXE')
		->first()->id;

		// $catID = CatN2::where('nombre','OXE')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'INCIDENTES';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'INCIDENTES')
		->where('CatN2.nombre', 'MUELLE / SIAM')
		->first()->id;

		// $catID = CatN2::where('nombre','MUELLE / SIAM')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'INCIDENTES';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'REQUERIMIENTOS')
		->where('CatN2.nombre', 'ESP')
		->first()->id;

		// $catID = CatN2::where('nombre','ESP')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'REQUERIMIENTOS';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'REQUERIMIENTOS')
		->where('CatN2.nombre', 'MET')
		->first()->id;

		// $catID = CatN2::where('nombre','MET')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'REQUERIMIENTOS';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'REQUERIMIENTOS')
		->where('CatN2.nombre', 'OXE')
		->first()->id;

		// $catID = CatN2::where('nombre','OXE')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'REQUERIMIENTOS';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Red Mina',
			'CatN2_id' => $catID
		]);

		$catID = CatN2::
		join('CatN1', 'CatN1.id', '=', 'CatN2.CatN1_id')
		->select('CatN2.id')
		->where('CatN1.nombre', 'REQUERIMIENTOS')
		->where('CatN2.nombre', 'MUELLE / SIAM')
		->first()->id;

		// $catID = CatN2::where('nombre','MUELLE / SIAM')->with('catN1')->get()
		// ->filter(function($item){
		// 	return $item->catN1->nombre == 'REQUERIMIENTOS';
		// })->first()->id;

		CatN3::create([
			'nombre' => 'RadioComunicaciones',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'CCTV',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Infraestructura',
			'CatN2_id' => $catID
		]);

		CatN3::create([
			'nombre' => 'Estaciones',
			'CatN2_id' => $catID
		]);
	}
}
