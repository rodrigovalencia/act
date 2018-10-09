<?php

use App\GrupoUsuario;
use Illuminate\Database\Seeder;

class GrupoUsuarioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		GrupoUsuario::truncate();

		GrupoUsuario::create(['nombre'=>'Redes']);
		GrupoUsuario::create(['nombre'=>'RadioCompunicaciones']);
		GrupoUsuario::create(['nombre'=>'Impresion']);
		GrupoUsuario::create(['nombre'=>'Soporte']);
		GrupoUsuario::create(['nombre'=>'CCTV']);
		GrupoUsuario::create(['nombre'=>'Mesa de Ayuda']);
	}
}
