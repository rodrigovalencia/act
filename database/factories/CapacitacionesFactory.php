<?php

use App\Capacitacion;
use App\Capacitacion_Persona;
use App\Categoria;
use App\Persona;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Persona::class, function (Faker $faker) {

	return [
		'rut' => $faker->numerify('#########'),
		'nombre' => $faker->firstName,
		'nombre2' => $faker->firstName,
		'apPaterno' => $faker->firstName,
		'apMaterno' => $faker->lastName,
	];
});

$factory->define(Capacitacion::class, function (Faker $faker) {

		$personaID = Persona::all()->pluck('id')->toArray();
		$usuarioID = Usuario::all()->pluck('id')->toArray();
		$categoriaID = Categoria::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'descripcion' => $faker->text,
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
		'duracion' => $faker->time($format = 'H:i:s', $max = 'now'),
		'Persona_id' => $faker->randomElement($personaID),
		'Usuario_id' => $faker->randomElement($usuarioID),
		'Categoria_id' => $faker->randomElement($categoriaID),
	];
});

$factory->define(Capacitacion_Persona::class, function (Faker $faker) {

		$capacitacionID = Capacitacion::all()->pluck('id')->toArray();
		$personaID = Persona::all()->pluck('id')->toArray();

	return [
		'Capacitacion_id' => $faker->randomElement($capacitacionID),
		'Persona_id' => $faker->randomElement($personaID),
		'asiste' => $faker->numberBetween($min = 0, $max = 1),
	];
});


