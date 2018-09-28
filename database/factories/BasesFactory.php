<?php

use App\Base;
use App\Contrato;
use App\DocComodato;
use App\DominioContrato;
use App\Equipo;
use App\Fabricante;
use App\Modelo;
use App\Procedimiento;
use App\RadioTrabajo;
use App\URadio;
use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Modelo::class, function (Faker $faker) {

	$fabricanteID = Fabricante::all()->pluck('id')->toArray();
	$procedimientoID = Procedimiento::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'documento' => $faker->text,
		'Fabricante_id' => $faker->randomElement($fabricanteID),
		'Procedimiento_id' => $faker->randomElement($procedimientoID),
	];
});

$factory->define(DocComodato::class, function (Faker $faker) {

	$radiotrabajoID = RadioTrabajo::all()->pluck('id')->toArray();
	$contratoID = Contrato::all()->pluck('id')->toArray();

	return [
		'RadioTrabajo_id' => $faker->randomElement($radiotrabajoID),
		'Contrato_id' => $faker->randomElement($contratoID),
		'documento' => $faker->text,
	];
});

$factory->define(URadio::class, function (Faker $faker) {

	$ubicacionID = Ubicacion::all()->pluck('id')->toArray();

	$opcion = $faker->numberBetween($min=0,$max=1);

	switch ($opcion) {
		case '0':
			$aux = Equipo::all()->pluck('id')->toArray();
			return [
				'Ubicacion_id' => $faker->randomElement($ubicacionID),
				'Uradio_id' => $faker->randomElement($aux),
				'Uradio_type' => 'Equipo',
			];
			break;
		case '1':
			$aux = Base::all()->pluck('id')->toArray();
			return [
				'Ubicacion_id' => $faker->randomElement($ubicacionID),
				'URadio_id' => $faker->randomElement($aux),
				'Uradio_type' => 'Base',
			];
			break;
	}
});

$factory->define(DominioContrato::class, function (Faker $faker) {

<<<<<<< HEAD
	$opcion = $faker->numberBetween($min=0,$max=1);
=======
	$flag = $faker->boolean(50);
>>>>>>> master

	if ($flag) {
		return [
			'DominioContrato_id' => Contrato::all()->random()->id,
			'DominioContrato_type' => 'Ubicacion',
		];
	} else {
		return [
			'DominioContrato_id' => Base::all()->random()->id,
			'DominioContrato_type' => 'Faena',
		];
	}
	

	// $opcion = $faker->numberBetween($min=0,$max=2);
	// switch ($opcion) {
	// 	case '0':
	// 		$aux = Contrato::all()->pluck('id')->toArray();
	// 		return [
	// 			'DominioContrato_id' => $faker->randomElement($aux),
	// 			'DominioContrato_type' => 'Ubicacion',
	// 		];
	// 		break;
	// 	case '1':
	// 		$aux = Base::all()->pluck('id')->toArray();
	// 		return [
	// 			'DominioContrato_id' => $faker->randomElement($aux),
	// 			'DominioContrato_type' => 'Faena',
	// 		];
	// 		break;
	// }
});