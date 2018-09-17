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
		// $this->call([
		// 	TruncateSeeder::class,

		// 	EmpresaSeeder::class,

		// 	FaenaSeeder::class,
		// 	UbicacionSeeder::class,
			
		// 	TipoActivoSeeder::class,
		// 	FabricanteSeeder::class,

		// 	SistemaSeeder::class,
		// 	TipoModeloSeeder::class,
			
		// 	ModeloRadioSeeder::class,

		// 	CatN1_Seeder::class,
		// 	CatN2_Seeder::class,
		// 	CatN3_Seeder::class,
		// 	CatN4_Seeder::class,
		// 	CatN5_Seeder::class,
		// 	Centinela_Seeder::class,

		// 	CatCodelco_Seeder::class,
		// 	Codelco_Seeder::class,

		// 	AdmN1_Seeder::class,
		// 	AdmN2_Seeder::class,
		// 	AdmN3_Seeder::class,
		// 	AdmN4_Seeder::class,
		// 	Administrativo_Seeder::class,

		// 	TipoContrato_Seeder::class,
		// 	Estado_Seeder::class,

		// 	CatEquipo_Seeder::class,
		// 	TipoEquipo_Seeder::class,

		// 	Contrato_Seeder::class,
		// 	ContratoInactivo_Seeder::class,
			
		// 	FakerSeeder::class,
		// ]);

		$this->call([
			// CatEquipo_Seeder::class,
			// TipoEquipo_Seeder::class,
			// Equipo_Seeder::class,

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
			// TipoContrato_Seeder::class,
			// Estado_Seeder::class,			
			FakerSeeder::class,

		]);
	}
}
