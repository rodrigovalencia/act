<?php

use Illuminate\Database\Seeder;

class Contrato_Seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Contrato::truncate();

		$ubicacionID = Ubicacion::where('nombre', 'División Chuquicamata')->value('id');
		$empresaID = Empresa::where('nombre', 'ACHIARDI')->value('id');



	}
}
