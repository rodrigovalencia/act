<?php

use App\Consumible;
use App\Fabricante;
use App\ModeloConsumible;
use App\TipoConsumible;
use Faker\Generator as Faker;

$factory->define(ModeloConsumible::class, function (Faker $faker) {

	$fabricante = Fabricante::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'Fabricante_id' => $faker->randomElement($fabricante),
	];
});

$factory->define(TipoConsumible::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Consumible::class, function (Faker $faker) {
	
	$modelo = ModeloConsumible::all()->pluck('id')->toArray();
	$TipoConsumible = TipoConsumible::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'stock' => $faker->numberBetween($min=0,$max=300),
		'TipoConsumible_id' => $faker->randomElement($TipoConsumible),
		'ModeloConsumible_id' => $faker->randomElement($modelo),
	];
});


$factory->define(Consumible_Activo::class, function (Faker $faker) {

		$consumible = Consumible::all()->pluck('id')->toArray();
		$activo = Activo::all()->pluck('id')->toArray();
		$ticket = Ticket::all()->pluck('id')->toArray();

	return [
		'cantidad' => $faker->numberBetween($min=0,$max=300),
		'Consumible_id' => $faker->randomElement($consumible),
		'Activo_id' => $faker->randomElement($activo),
		'Ticket_id' => $faker->randomElement($ticket),
	];
});
