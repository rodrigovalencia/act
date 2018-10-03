<?php

use App\Activo;
use App\CategoriaComponente;
use App\Componente;
use App\Componente_EstadoComponente;
use App\EstadoComponente;
use App\FabricanteComponente;
use App\FabricanteComponente_TipoComponente;
use App\TipoActivo;
use App\TipoComponente;
use Faker\Generator as Faker;

$factory->define(TipoComponente::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->firstName,
    ];
});

$factory->define(CategoriaComponente::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->firstName,
    ];
});

$factory->define(EstadoComponente::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->firstName,
    ];
});

$factory->define(FabricanteComponente::class, function (Faker $faker) {

		$tipoActivo = TipoActivo::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'TipoActivo_id' => $faker->randomElement($tipoActivo),
	];
});

$factory->define(FabricanteComponente_TipoComponente::class, function (Faker $faker) {

		$fabricante = FabricanteComponente::all()->pluck('id')->toArray();
		$tipo = TipoComponente::all()->pluck('id')->toArray();

	return [
		'FabricanteComponente_id' => $faker->randomElement($fabricante),
		'TipoComponente_id' => $faker->randomElement($tipo),
	];
});

$factory->define(Componente_EstadoComponente::class, function (Faker $faker) {

		$estado = EstadoComponente::all()->pluck('id')->toArray();
		$componente = Componente::all()->pluck('id')->toArray();

	return [
		'Componente_id' => $faker->randomElement($componente),
		'EstadoComponente_id' => $faker->randomElement($estado),
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
	];
});

$factory->define(Componente::class, function (Faker $faker) {

		$categoria = CategoriaComponente::all()->pluck('id')->toArray();
		$tipoComponente = TipoComponente::all()->pluck('id')->toArray();
		$activo = Activo::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'caracteristica' => $faker->text,
		'descripcion' => $faker->text,
		'nserie' => $faker->randomNumber($nbDigits = NULL, $strict = false),
		'Activo_id' => $faker->randomElement($activo),
		'TipoComponente_id' => $faker->randomElement($tipoComponente),
		'CategoriaComponente_id' => $faker->randomElement($categoria),
	];
});