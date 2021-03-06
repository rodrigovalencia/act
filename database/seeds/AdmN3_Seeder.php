<?php

use App\AdmN1;
use App\AdmN2;
use App\AdmN3;

use Illuminate\Database\Seeder;

class AdmN3_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		AdmN3::truncate();

		$catID = AdmN2::
		join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
		->select('AdmN2.id')
		->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
		->where('AdmN2.nombre', 'ESP')
		->first()->id;

		// $catID = AdmN2::
		// where('nombre','ESP')
		// ->with('AdmN1')->get()
		// ->filter(function($item){
		// 	return $item->AdmN1->nombre == 'GESTION ADMINISTRATIVA';
		// })->first()->id;

		AdmN3::create([
			'nombre' => 'Seguridad',
			'AdmN2_id' => $catID
		]);

		AdmN3::create([
			'nombre' => 'Operación',
			'AdmN2_id' => $catID
		]);

		$catID = AdmN2::
		join('AdmN1', 'AdmN1.id', '=', 'AdmN2.AdmN1_id')
		->select('AdmN2.id')
		->where('AdmN1.nombre', 'GESTION ADMINISTRATIVA')
		->where('AdmN2.nombre', 'MET')
		->first()->id;

		// $catID = AdmN2::where('nombre','MET')->with('AdmN1')->get()
		// ->filter(function($item){
		// 	return $item->AdmN1->nombre == 'GESTION ADMINISTRATIVA';
		// })->first()->id;

		AdmN3::create([
			'nombre' => 'Seguridad',
			'AdmN2_id' => $catID
		]);
	}
}
