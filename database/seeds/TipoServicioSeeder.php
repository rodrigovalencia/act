<?php

use App\TipoServicio;
use Illuminate\Database\Seeder;

class TipoServicioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoServicio::truncate();

		TipoServicio::create(['nombre'=>'Mesa Ayuda']);
		TipoServicio::create(['nombre'=>'Programacion de Radio']);
		TipoServicio::create(['nombre'=>'Configuracion']);
		TipoServicio::create(['nombre'=>'Reparacion']);
		TipoServicio::create(['nombre'=>'Mantencion']);
	}
}
