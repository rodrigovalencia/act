<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call([
			CatEquipo_Seeder::class,
			TipoEquipo_Seeder::class,
			Equipo_Seeder::class,

			FaenaSeeder::class,
			UbicacionSeeder::class,
			AreaSeeder::class,
			TipoActivoSeeder::class,
			FabricanteSeeder::class,
			TipoModeloSeeder::class,
			SistemaSeeder::class,
			ModeloRadioSeeder::class,
			CatEquipo_Seeder::class,
			TipoEquipo_Seeder::class,	
			Equipo_Seeder::class,
			TipoBase_Seeder::class,
			Base_Seeder::class,
			EmpresaSeeder::class,
			Contrato_Seeder::class,
			ContratoInactivo_Seeder::class,
			TipoContrato_Seeder::class,
			Estado_Seeder::class,	
					
			FakerSeeder::class,

		]);
	}
}
