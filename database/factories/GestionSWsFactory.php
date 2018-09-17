<?php

use App\ActivoComputo;
use App\Computador;
use App\DispRed;
use App\Fabricante;
use App\InstSW;
use App\Key;
use App\Licencia;
use App\ModeloSW;
use App\SW;
use App\TipoKey;
use App\TipoLicencia;
use Faker\Generator as Faker;

$factory->define(ModeloSW::class, function (Faker $faker) {
	
	$fabricanteID = Fabricante::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'Fabricante_id' => $faker->randomElement($fabricanteID),
	];
});

$factory->define(SW::class, function (Faker $faker) {
	
	$modeloSwID = Fabricante::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'ModeloSW_id' => $faker->randomElement($modeloSwID),
		'version' => $faker->numerify('###'),
		'documento' => $faker->text,
	];
});

$factory->define(TipoKey::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(TipoLicencia::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Key::class, function (Faker $faker) {

	$tipokeyID = TipoKey::all()->pluck('id')->toArray();
	$licenciaID = Licencia::all()->pluck('id')->toArray();

	return [
		'TipoKey_id' => $faker->randomElement($tipokeyID),
		'Licencia_id' => $faker->randomElement($licenciaID),
		'serial' => $faker->bothify('###????####?'),
		'cantidad' => $faker->numberBetween($min=0,$max=100),
	];
});

$factory->define(Licencia::class, function (Faker $faker) {

	$swID = SW::all()->pluck('id')->toArray();
	$tipolicenciaID = TipoLicencia::all()->pluck('id')->toArray();

	return [
		'serie' => $faker->bothify('###????####?'),
		'cantidad' => $faker->numberBetween($min=0,$max=100),
		'documento' => $faker->text,
		'TipoLicencia_id' => $faker->randomElement($tipolicenciaID),
		'SW_id' => $faker->randomElement($swID),
	];
});

$factory->define(InstSW::class, function (Faker $faker) {

	$activoComputoID = ActivoComputo::all()->pluck('id')->toArray();
	$swID = SW::all()->pluck('id')->toArray();
	$licenciaID = Licencia::all()->pluck('id')->toArray();

	return [
		'Licencia_id' => $faker->randomElement($licenciaID),
		'SW_id' => $faker->randomElement($swID),
		'activoComputo_id' => $faker->randomElement($activoComputoID),
	];
});

$factory->define(ActivoComputo::class, function (Faker $faker) {
	
	$opcion = $faker->numberBetween($min=0,$max=1);

	switch ($opcion) {
		case '0':
			$aux = Computador::all()->pluck('id')->toArray();
			return [
				'DominioContrato_id' => $faker->randomElement($aux),
				'DominioContrato_type' => 'Computador',
			];
			break;
		case '1':
			$aux = DispRed::all()->pluck('id')->toArray();
			return [
				'DominioContrato_id' => $faker->randomElement($aux),
				'DominioContrato_type' => 'DispRed',
			];
			break;
	}
});