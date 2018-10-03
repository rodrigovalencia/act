<?php

use App\Activo;
use App\ActivoComputo;
use App\AreaCanal;
use App\Canal;
use App\Componente;
use App\ConfEquipo;
use App\ConfEquipo_Activo;
use App\ConfSW;
use App\ConfSW_ActivoComputo;
use App\Configuracion;
use App\Mantencion;
use App\Mantencion_Activo;
use App\Mantencion_Activo_Componente;
use App\Perfil;
use App\Programacion;
use App\Programacion_Activo;
use App\Programacion_Activo_Canal;
use App\Reparacion;
use App\Reparacion_Activo;
use App\ResultadoMantencion;
use App\ResultadoReparacion;
use App\Servicio;
use App\Servicio_Usuario;
use App\Ticket;
use App\TipoMantencion;
use App\TipoProgramacion;
use App\Usuario;
use App\Zona;
use Faker\Generator as Faker;

$factory->define(Servicio_Usuario::class, function (Faker $faker) {

	$servicioID = Servicio::all()->pluck('id')->toArray();
	$usuarioID = Usuario::all()->pluck('id')->toArray();

	return [
		'Servicio_id' => $faker->randomElement($servicioID),
		'Usuario_id' => $faker->randomElement($usuarioID),
	];
});

$factory->define(Servicio::class, function (Faker $faker) {

	$ticket = factory(Ticket::class)->states('definicion')->create();

	$opcion = $faker->numberBetween($min=0,$max=3);

	switch ($opcion) {
		case '0':
			$aux = $factory(Programacion::class)->create();
			return [
				'Ticket_id' => $ticket->id,
				'Servicio_id' => $aux->id,
				'Servicio_type' => 'Programacion',
			];
			break;
		case '1':
			$aux = $factory(Configuracion::class)->create();
			return [
				'Ticket_id' => $ticket->id,
				'Servicio_id' => $aux->id,
				'Servicio_type' => 'Configuracion',
			];
			break;
		case '2':
			$aux = $factory(Reparacion::class)->create();
			return [
				'Ticket_id' => $ticket->id,
				'Servicio_id' => $aux->id,
				'Servicio_type' => 'Reparacion',
			];
			break;
		case '3':
			$aux = $factory(Mantencion::class)->create();
			return [
				'Ticket_id' => $ticket->id,
				'Servicio_id' => $aux->id,
				'Servicio_type' => 'Mantencion',
			];
			break;
	}
});

/*Declaracion Factories de Mantenciones */

$factory->define(TipoMantencion::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(ResultadoMantencion::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Mantencion_Activo::class, function (Faker $faker) {
	
	$mantencionID = TipoMantencion::all()->pluck('id')->toArray();
	$activoID = Activo::all()->pluck('id')->toArray();

	return [
		'Mantencion_id' => $faker->randomElement($mantencionID),
		'Activo_id' => $faker->randomElement($activoID),
	];
});

$factory->define(Mantencion_Activo_Componente::class, function (Faker $faker) {

	$mantencionID = TipoMantencion::all()->pluck('id')->toArray();
	$activoID = Activo::all()->pluck('id')->toArray();
	$componenteID = Componente::all()->pluck('id')->toArray();
	$resultadoID = ResultadoMantencion::all()->pluck('id')->toArray();

	return [
		'Mantencion_id' => $faker->randomElement($mantencionID),
		'Activo_id' => $faker->randomElement($activoID),
		'Componente_id' => $faker->randomElement($componenteID),
		'Resultado_id' => $faker->randomElement($resultadoID),
	];
});
$factory->define(Mantencion::class, function (Faker $faker) {
	
	$tipomantencionID = TipoMantencion::all()->pluck('id')->toArray();

	return [
		'TipoMantencion_id' => $faker->randomElement($tipomantencionID),
	];
});

/* Declaracion Factories de Reparaciones */

$factory->define(ResultadoReparacion::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Reparacion_Activo::class, function (Faker $faker) {

	$aux = factory(Reparacion::class)->create();
	$activoID = Activo::all()->pluck('id')->toArray();

	return [
		'Reparacion_id' => $aux->id,
		'Activo_id' => $faker->randomElement($activoID),
	];
});

$factory->define(Reparacion_Activo_Componente::class, function (Faker $faker) {

	$aux = factory(Reparacion::class)->create();
	$activoID = Activo::all()->pluck('id')->toArray();
	$ComponenteID = Componente::all()->pluck('id')->toArray();
	$ResultadoID = ResultadoReparacion::all()->pluck('id')->toArray();

	return [
		'Reparacion_id' => $aux->id,
		'Activo_id' => $faker->randomElement($activoID),
		'Componente_id' => $faker->randomElement($activoID),
		'Resultado_id' => $faker->randomElement($activoID),
		'comentario' => $faker->text,
	];
});

/* Declaracion Factories de Configuracion */

$factory->define(ConfEquipo_Activo::class, function (Faker $faker) {

	$aux = factory(ConfEquipo::class)->create();

	$activoID = Activo::all()->pluck('id')->toArray();

	return [
		'ConfEquipo_id' => $aux->id,
		'Activo_id' => $faker->randomElement($activoID),
		'detalle' => $faker->text,
		'observacion' => $faker->text,
	];
});

$factory->define(ConfSW::class, function (Faker $faker) {
	return [
		'descripcion' => $faker->text,
		'comentario' => $faker->text,
	];
});

$factory->define(ConfSW_ActivoComputo::class, function (Faker $faker) {

	$confSwID = ConfSW::all()->pluck('id')->toArray();
	$activocomputoID = ActivoComputo::all()->pluck('id')->toArray();

	return [
		'ConfSW_id' => $faker->randomElement($confSwID),
		'ActivoComputo_id' => $faker->randomElement($activocomputoID),
	];
});

$factory->define(Configuracion::class, function (Faker $faker) {
	
	$opcion = $faker->numberBetween($min=0,$max=1);

	switch ($opcion) {
		case '0':
			$aux = ConfSW::all()->pluck('id')->toArray();
			return [
				'Configuracion_id' => $faker->randomElement($aux),
				'Configuracion_type' => 'ConfSW',
			];
			break;
		case '1':
			$aux = ConfEquipo::all()->pluck('id')->toArray();
			return [
				'Configuracion_id' => $faker->randomElement($aux),
				'Configuracion_type' => 'ConfEquipo',
			];
			break;
	}
});

/* Declaracion Factories de Programacion de Radios */

$factory->define(Programacion::class, function (Faker $faker) {
	return [
		'documento' => $faker->firstName,
	];
});

$factory->define(TipoProgramacion::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(Perfil::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
		'descripcion' => $faker->text,
	];
});

$factory->define(Zona::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
	];
});

$factory->define(AreaCanal::class, function (Faker $faker) {
	return [
		'nombre' => $faker->firstName,
		'letra' => $faker->randomLetter,
	];
});

$factory->define(Canal::class, function (Faker $faker) {
	
	$areacanalID = AreaCanal::all()->pluck('id')->toArray();

	return [
		'AreaCanal_id' => $faker->randomElement($areacanalID),
		'numero' => $faker->randomNumber($nbDigits = NULL, $strict = false),
		'nombre' => $faker->firstName,
		'abreviacion' => $faker->word,
	];
});

$factory->define(Perfil_Zona_Canal::class, function (Faker $faker) {

	$perfilID = Perfil::all()->pluck('id')->toArray();
	$zonaID = Zona::all()->pluck('id')->toArray();
	$canalID = Canal::all()->pluck('id')->toArray();

	return [
		'Perfil_id' => $faker->randomElement($perfilID),
		'Zona_id' => $faker->randomElement($zonaID),
		'Canal_id' => $faker->randomElement($canalID),
	];
});

$factory->define(Programacion_Activo_Canal::class, function (Faker $faker) {

	$programaactivoID = Programacion_Activo::all()->pluck('id')->toArray();
	$zonaID = Zona::all()->pluck('id')->toArray();
	$canalID = Canal::all()->pluck('id')->toArray();

	return [
		'Programacion_Activo_id' => $faker->randomElement($programaactivoID),
		'Zona_id' => $faker->randomElement($zonaID),
		'Canal_id' => $faker->randomElement($canalID),
	];
});

$factory->define(Programacion_Activo::class, function (Faker $faker) {

	$programacionID = Programacion::all()->pluck('id')->toArray();
	$tipoprogramacionID = TipoProgramacion::all()->pluck('id')->toArray();
	$activoID = Activo::all()->pluck('id')->toArray();
	$perfilID = Perfil::all()->pluck('id')->toArray();

	return [
		'Programacion_id' => $faker->randomElement($programacionID),
		'TipoProgramacion_id' => $faker->randomElement($tipoprogramacionID),
		'Activo_id' => $faker->randomElement($activoID),
		'Perfil_id' => $faker->randomElement($perfilID),
	];
});