<?php

use App\ExpReg_RT;
use App\Sistema;
use Illuminate\Database\Seeder;

class ExpReg_RTSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		ExpReg_RT::truncate();

		$sistemaID = Sistema::where('nombre', 'P25 - TRUNKING')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA9999',     // (0-9){3}(a-z){3}(0-9){4}
			'flashPort'  => '9999999999',     // (0-9){10}
			'idSistema'  => '9999999',        // (0-9){7}
			'Sistema_id' => $sistemaID,
		]);

		$sistemaID = Sistema::where('nombre', 'P16 - TRUNKING')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA9999',     // (0-9){3}(a-z){3}(0-9){4}
			'flashPort'  => '9999999999',     // (0-9){10}
			'idSistema'  => '999999',         // (0-9){6}
			'Sistema_id' => $sistemaID,
		]);

		$sistemaID = Sistema::where('nombre', 'VHF')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA(9|A)999', // (0-9){3}(a-z){3}(0-9|a-z)(0-9){3}
			'idSistema'  => '9999',           // (0-9){4}
			'Sistema_id' => $sistemaID,
		]);
	}
}
