<?php

use App\Capacitacion;
use App\Persona;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
	$flagNom2 = $faker->boolean(30);
	$flagApMat = $faker->boolean(85);
	return [
		'rut'       => $faker->unique()->numberBetween(6000000, 30000000),
		'nombre'    => $faker->firstName,
		'nombre2'   => ($flagNom2) ? $faker->firstName : null,
		'apPaterno' => $faker->lastName,
		'apMaterno' => ($flagApMat) ? $faker->lastName : null,
	];
});

$factory->define(Capacitacion::class, function (Faker $faker) {
	$flagDoc1 = $faker->boolean(80);
	$flagDoc2 = $faker->boolean(30);

	$oradorID = factory(Persona::class)->create()->id;
	$usuarioID = Usuario::all()->random()->id;

	return [
		'nombre' => $faker->firstName,
		'descripcion' => $faker->sentence,
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
		'duracion' => $faker->time($format = 'H:i:s', $max = 'now'),
		'Persona_id' => $oradorID,
		'Usuario_id' => $usuarioID,
		'documento' => ($flagDoc1) ? '/documentosCapacitacion/' . $faker->word . '.txt' : null,
		'documento2' => ($flagDoc2) ? '/documentosCapacitacion/' . $faker->word . '.txt' : null,
	];
});