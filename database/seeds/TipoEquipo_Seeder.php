<?php

use App\CatEquipo;
use App\TipoEquipo;
use Illuminate\Database\Seeder;

class TipoEquipo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		TipoEquipo::truncate();

		$catID = CatEquipo::where('nombre', 'EQUIPO APOYO')->value('id');

		TipoEquipo::create([
			'nombre' => 'BULLDOZER',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'WHEELDOZER',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'MOTONIVELADORA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'REGADOR',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'GRUA HORQUILLA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'GRUA NEUMATICO',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'GRUA MORGAN',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'CAMION TRANSPORTE ESCORIA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'GRUA PUENTE',
			'CatEquipo_id' => $catID,
		]);

		$catID = CatEquipo::where('nombre', 'EQUIPO CARGUIO')->value('id');

		TipoEquipo::create([
			'nombre' => 'CAEX',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'PALA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'RETROEXCAVADORA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'SPRADER',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'WHEELLOADER',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'BULLLOADER',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'ROTOPALA',
			'CatEquipo_id' => $catID,
		]);

		$catID = CatEquipo::where('nombre', 'EQUIPO LIVIANO')->value('id');

		TipoEquipo::create([
			'nombre' => 'CAMION',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'CAMIONETA',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'CARRY ALL',
			'CatEquipo_id' => $catID,
		]);
		TipoEquipo::create([
			'nombre' => 'AMBULANCIA',
			'CatEquipo_id' => $catID,
		]);

		$catID = CatEquipo::where('nombre', 'EQUIPO PERFORADOR')->value('id');

		TipoEquipo::create([
			'nombre' => 'PERFORADORA',
			'CatEquipo_id' => $catID,
		]);

		$catID = CatEquipo::where('nombre', 'TRANSPORTE')->value('id');

		TipoEquipo::create([
			'nombre' => 'LOCOMOTORA',
			'CatEquipo_id' => $catID,
		]);

    }
}
