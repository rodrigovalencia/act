<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Rol::truncate();

		Rol::create(['nombre'=>'Administrador del Sistema']);
		Rol::create(['nombre'=>'Oficina ACT']);
		Rol::create(['nombre'=>'Administrador de Contrato']);
		Rol::create(['nombre'=>'Supervisor Distrital']);
		Rol::create(['nombre'=>'Supervisor Mesa Ayuda']);
		Rol::create(['nombre'=>'Supervisor Tecnico']);
		Rol::create(['nombre'=>'Tecnico']);
		Rol::create(['nombre'=>'Mesa Ayuda']);
		Rol::create(['nombre'=>'Encargado de Inventario']);
		Rol::create(['nombre'=>'Visor']);
	}
}
