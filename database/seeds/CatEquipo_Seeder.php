<?php

use App\CatEquipo;
use Illuminate\Database\Seeder;

class CatEquipo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		CatEquipo::truncate();

		CatEquipo::create([
			'nombre' => 'EQUIPO APOYO'
		]);
		CatEquipo::create([
			'nombre' => 'EQUIPO BASE'
		]);
		CatEquipo::create([
			'nombre' => 'EQUIPO CARGUIO'
		]);
		CatEquipo::create([
			'nombre' => 'EQUIPO LIVIANO'
		]);
		CatEquipo::create([
			'nombre' => 'EQUIPO PERFORADOR'
		]);
		CatEquipo::create([
			'nombre' => 'TRANSPORTE'
		]);

    }
}
