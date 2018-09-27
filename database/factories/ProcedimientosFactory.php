<?php

use App\Procedimiento;
use App\TipoServicio;
use Faker\Generator as Faker;

$factory->define(TipoServicio::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Procedimiento::class, function (Faker $faker) {
	
	$tiposervicioID = TipoServicio::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'descripcion' => $faker->text,
		'documento' => $faker->text,
		'TipoServicio_id' => $faker->randomElement($tiposervicioID),
	];
});