<?php

use App\Rol;
use App\TipoUsuario;
use App\Ubicacion;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(TipoUsuario::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});


$factory->define(Usuario::class, function (Faker $faker) {

	$rol = Rol::all()->pluck('id')->toArray();
	$TipoUsuario = TipoUsuario::all()->pluck('id')->toArray();
	$ubicacion = Ubicacion::all()->pluck('id')->toArray();

	return [
		'rut' => $faker->numerify('#########'),
		'nombre' => $faker->firstName,
		'apPaterno' => $faker->firstName,
		'apMaterno' => $faker->lastName,
		'fono' => $faker->e164PhoneNumber,
		'mail' => $faker->email,
		'usuarioActivo' => $faker->numberBetween($min = 0, $max = 1),
		'pass' => bcrypt('sisticket'),
		'Rol_id' => $faker->randomElement($rol),
		'TipoUsuario_id' => $faker->randomElement($TipoUsuario),
		'Ubicacion_id' => $faker->randomElement($ubicacion),
	];
});