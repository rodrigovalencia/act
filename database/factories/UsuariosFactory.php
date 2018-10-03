<?php

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
	$flagApMat  = $faker->boolean(85);
	$flagAvatar = $faker->boolean(20);
	return [
		'rut' => $faker->unique()->numberBetween(6000000, 30000000),
		'pass' => bcrypt('123456'),
		'nombre' => $faker->firstName,
		'apPaterno' => $faker->lastName,
		'apMaterno' => ($flagApMat) ? $faker->lastName : null,
		'fono' => $faker->e164PhoneNumber,
		'mail' => $faker->email,
		'avatar' => ($flagAvatar) ? '/avatar/' . $faker->word . '.txt' : null,
		'usuarioActivo' => $faker->boolean(85),
	];
});