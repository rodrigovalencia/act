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
        	EmpresaSeeder::class,
        	
        	TipoActivoSeeder::class,
        	FabricanteSeeder::class,

        	SistemaSeeder::class,
        	TipoModeloSeeder::class,
        	
        	ModeloRadioSeeder::class,

        	CatN1_Seeder::class,
        	CatN2_Seeder::class,
        	CatN3_Seeder::class,
        ]);
    }
}
