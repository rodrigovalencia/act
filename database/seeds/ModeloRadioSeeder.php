<?php

use App\Fabricante;
use App\ModeloRadio;
use App\ModeloRadio_Sistema;
use App\Sistema;
use App\TipoModelo;
use Illuminate\Database\Seeder;

class ModeloRadioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('TipoModelo_id')
	 * unsignedInteger('Fabricante_id')
	 * string('documento')->nullable()
	 */

		ModeloRadio::truncate();
		ModeloRadio_Sistema::truncate();

		$P25 = Sistema::where('nombre', 'P25 - TRUNKING')    -> first() -> id;
		$P16 = Sistema::where('nombre', 'P16 - TRUNKING')    -> first() -> id;
		$vhfID      = Sistema::where('nombre', 'VHF')         -> first() -> id;

		$movilID    = TipoModelo::where('nombre', 'MOVIL')    -> first() -> id;
		$portatilID = TipoModelo::where('nombre', 'PORTATIL') -> first() -> id;
		$baseID     = TipoModelo::where('nombre', 'BASE')     -> first() -> id;
		
		$motorolaID = Fabricante::where('nombre', 'MOTOROLA') -> first() -> id;

		ModeloRadio::create([
			'nombre' => 'APX 1000',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'APX 2000',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'APX 2500',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'PRO 5550',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 7550',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTL 1500',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTL 2250',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTL 2500',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTL 5000',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTS 1500',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTS 2250',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'XTS 2500',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'DEP 550',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 5150',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 300',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 6150',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'TP 9160',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'DEP 450',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 4150',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'EP 450',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DEM 400',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 5100',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'GP 300',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'GM 300',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'APX 1500',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'DGM 5000',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'APX 7000',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach([$P25,$P16]);

		ModeloRadio::create([
			'nombre' => 'DEP 550E',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'EM 200',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 3100',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 5550E',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'EP 350 MX',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 5050',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DEM 500',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGP 8550',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DEP 570',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 2150',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'PRO 3150',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'P 200',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'DGM 5000E',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'MCX 1000',
			'TipoModelo_id' => $movilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);

		ModeloRadio::create([
			'nombre' => 'HT 600',
			'TipoModelo_id' => $portatilID,
			'Fabricante_id' => $motorolaID,
		])->sistemas()->attach($vhfID);
	}
}
