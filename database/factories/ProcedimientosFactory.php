<?php

use App\Procedimiento;
use Faker\Generator as Faker;

$factory->define(Procedimiento::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
		'descripcion' => $faker->sentence,
		'documento' => '/documentos/' . $faker->word . '.txt',
	];
});