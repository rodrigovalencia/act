<?php

use App\Actividad;
use App\Activo;
use App\ActivoLog;
use App\SubActividad;
use App\Ubicacion;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(SubActividad::class, function (Faker $faker) {
	
	$actividad = Actividad::all()->pluck('id')->toArray();

	return [
		'nombre' => $faker->firstName,
		'Actividad_id' => $faker->randomElement($actividad),
	];
});

$factory->define(ActivoLog::class, function (Faker $faker) {
	
	$activoID = Activo::all()->pluck('id')->toArray();
	$SubactividadID = SubActividad::all()->pluck('id')->toArray();
	$usuarioID = Usuario::all()->pluck('id')->toArray();
	$ubicacionID = Ubicacion::all()->pluck('id')->toArray();

	return [
		'Activo_id' => $faker->randomElement($activoID),
		'SubActividad_id' => $faker->randomElement($SubactividadID),
		'Usuario_id' => $faker->randomElement($usuarioID),
		'Ubicacion_id' => $faker->randomElement($ubicacionID),
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
	];
});