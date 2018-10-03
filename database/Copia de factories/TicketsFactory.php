<?php

use App\CategoriaTicket;
use App\Contacto;
use App\EstadoTicket;
use App\Servicio;
use App\Ticket;
use App\Ticket_EstadoTicket;
use App\Ubicacion;
use App\Usuario;
use Faker\Generator as Faker;

$factory->define(EstadoTicket::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Ticket_EstadoTicket::class, function (Faker $faker) {

	$estadoticketID = EstadoTicket::all()->pluck('id')->toArray();
	$ticketID = Ticket::all()->pluck('id')->toArray();
	$usuarioID = Usuario::all()->pluck('id')->toArray();

	return [
		'Ticket_id' => $faker->randomElement($ticketID),
		'EstadoTicket_id' => $faker->randomElement($estadoticketID),
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
		'Usuario_id' => $faker->randomElement($usuarioID),
	];
});

$factory->define(Contacto::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
		'apPaterno' => $faker->firstName,
		'apMaterno' => $faker->lastName,
		'fono' => $faker->e164PhoneNumber,
		'fecha' => $faker->dateTime($max = 'now', $timezone = null),
		'documento' => $faker->text,
	];
});

$factory->define(Ticket::class, function (Faker $faker) {
	factory(Servicio::class)->create();
});

$factory->state(Ticket::class, 'definicion', function (Faker $faker) {

	$categoriaticketID = CategoriaTicket::all()->pluck('id')->toArray();
	$contactoID = Contacto::all()->pluck('id')->toArray();
	$ubicacionID = Ubicacion::all()->pluck('id')->toArray();

	return [
		'fInicio' => $faker->dateTime($max = 'now', $timezone = null),
		'fCompromiso' => $faker->dateTime($max = 'now', $timezone = null),
		'fTermino' => $faker->dateTime($max = 'now', $timezone = null),
		'CategoriaTicket_id' => $faker->randomElement($categoriaticketID),
		'Solicita_id' => $faker->randomElement($contactoID),
		'Retira_id' => $faker->randomElement($contactoID),
		'Ubicacion_id' => $faker->randomElement($ubicacionID),
		'observaciones' => $faker->text,
		'observaciones2' => $faker->text,
	];
});