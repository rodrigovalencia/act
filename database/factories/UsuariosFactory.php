<?php

use App\Rol;
use App\TipoUsuario;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
	return [
		//
	];
});

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
