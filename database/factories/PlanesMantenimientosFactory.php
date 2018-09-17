<?php

use App\Activo;
use App\Activo_PlanMantenimiento;
use App\ActualizacionPlan;
use App\PlanMantenimiento;
use App\TipoActivo;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(PlanMantenimiento::class, function (Faker $faker) {

	$tipoActivo = TipoActivo::all()->pluck('id')->toArray();

    return [
    	'fCreacion' => $faker->dateTime($max = 'now', $timezone = null),
    	'TipoActivo_id' => $faker->randomElement($tipoActivo),

    ];
});

$factory->define(ActualizacionPlan::class, function (Faker $faker) {

		$plan = PlanMantenimiento::all()->pluck('id')->toArray();
		$usuario = Usuario::all()->pluck('id')->toArray();

	return [
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
		'Usuario_id' => $faker->randomElement($usuario),
		'documento' => $faker->text,
		'PlanMantenimiento_id' => $faker->randomElement($plan),
	];
});

$factory->define(Activo_PlanMantenimiento::class, function (Faker $faker) {

		$plan = PlanMantenimiento::all()->pluck('id')->toArray();
		$activo = Activo::all()->pluck('id')->toArray();
		$usuario = Usuario::all()->pluck('id')->toArray();

	return [
		'Activo_id' => $faker->randomElement($activo),
		'PlanMantenimiento_id' => $faker->randomElement($plan),
		'fUltima' => $faker->dateTime($max = 'now', $timezone = null),
		'periodo' => $faker->text,
	];
});