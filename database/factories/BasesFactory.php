<?php

use App\Contrato;
use App\DocComodato;
use App\Estado;
use App\Modelo;
use App\SATI;
use App\TipoContrato;
use Faker\Generator as Faker;

$factory->define(Modelo::class, function (Faker $faker) {
	$flagDocumento = $faker->boolean(15);
	return [
		'nombre' => $faker->firstName,
		'documento' => ($flagDocumento) ? '/documentos/' . $faker->word . '.txt' : null,
	];
});

$factory->define(SATI::class, function (Faker $faker) {
	$flagSAP = $faker->boolean(50);
	$flagNom2 = $faker->boolean(30);
	$flagApMat = $faker->boolean(85);

	$tipoID = TipoContrato::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$estadoID = Estado::all()->random()->id;

	return [
		'rut'              => $faker->unique()->numberBetween(6000000, 30000000),
		'numSAP'           => ($flagSAP) ? $faker->numberBetween(100000, 400000) : null,
		'nombre'           => $faker->firstName,
		'nombre2'          => ($flagNom2) ? $faker->firstName : null,
		'apPaterno'        => $faker->lastName,
		'apMaterno'        => ($flagApMat) ? $faker->lastName : null,
		'userID'           => $faker->userName,
		'fTerminoContrato' => $faker->dateTimeBetween('-30 years','+10 years'),
		'cecoGrafo'        => $faker->regexify('([a-z]{2}[0-9]{3}|[0-9]{10})'),
		'TipoContrato_id'  => $tipoID,
		'Contrato_id'      => $contratoID,
		'Estado_id'        => $estadoID,
	];
});

$factory->define(DocComodato::class, function (Faker $faker) {
	$contratoID = Contrato::all()->random()->id;
	return [
		'Contrato_id' => $contratoID,
		'documento' => '/documentos/' . $faker->word . '.txt',
	];
});