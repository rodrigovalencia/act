<?php

use App\Activo;
use App\Activo_Empresa;
use App\Activo_EstadoActivo;
use App\Area;
use App\CCTV;
use App\CableRadiante;
use App\CarroAmplificacion;
use App\Celular;
use App\Computador;
use App\Contrato;
use App\DispRed;
use App\Empresa;
use App\EstadoActivo;
use App\Impresora;
use App\Modelo;
use App\ModeloRadio;
use App\Monitor;
use App\RadioComercial;
use App\RadioTrabajo;
use App\Repetidor;
use App\SATI;
use App\Sistema;
use App\Ticket;
use App\TipoActivo;
use App\URadio;
use App\Ubicacion;
use Faker\Generator as Faker;
use Illuminate\Contracts\Support\Responsable;

$factory->define(Activo::class, function (Faker $faker) {
	
	$estadoID = EstadoActivo::all()->pluck('id')->toArray();
	$cctvID = CCTV::all()->pluck('id')->toArray();
	$computadorID = Computador::all()->pluck('id')->toArray();
	$dispredID = DispRed::all()->pluck('id')->toArray();
	$radiocomercialID = RadioComercial::all()->pluck('id')->toArray();
	$radiotrabajoID = RadioTrabajo::all()->pluck('id')->toArray();
	$impresoraID = Impresora::all()->pluck('id')->toArray();
	$monitorID = Monitor::all()->pluck('id')->toArray();
	$celularID = Celular::all()->pluck('id')->toArray();
	$cableradianteID = CableRadiante::all()->pluck('id')->toArray();
	$carroamplificacionID = CarroAmplificacion::all()->pluck('id')->toArray();
	$repetidorID = Repetidor::all()->pluck('id')->toArray();
	$activotypeID = TipoActivo::all()->pluck('id')->toArray();

	$opcion = $faker->numberBetween($min=0,$max=10);

	switch ($opcion) {
		case '0':
			$aux = factory(CCTV::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'CCTV',
			];
			break;
		case '1':
			$aux = factory(Computador::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'Computador',
			];
			break;
		case '2':
			$aux = factory(DispRed::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'DispRed',
			];
			break;
		case '3':
			$aux = factory(RadioComercial::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'RadioComercial',
			];
			break;
		case '4':
			$aux = factory(RadioTrabajo::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'RadioTrabajo',
			];
			break;
		case '5':
			$aux = factory(Impresora::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'Impresora',
			];
			break;
		case '6':
			$aux = factory(Monitor::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'Monitor',
			];
			break;
		case '7':
			$aux = factory(Celular::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'Celular',
			];
			break;
		case '8':
			$aux = factory(CableRadiante::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'CableRadiante',
			];
			break;
		case '9':
			$aux = factory(CarroAmplificacion::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'CarroAmplificacion',
			];
			break;
		case '10':
			$aux = factory(Repetidor::class)->create();
			return [
				'Estado_id' => $faker->randomElement($estadoID),
				'Activo_id' => $aux->id,
				'Activo_type' => 'Repetidor',
			];
			break;
	}
});

$factory->define(CCTV::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'mac' => $faker->macAddress,
		'ip' => $faker->localIpv4,
		'Modelo_id' => $faker->randomElement($modeloID),
		'Contrato_id' => $faker->randomElement($ContratoID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
		'Area_id' => $faker->randomElement($AreaID),
	];
});

$factory->define(Computador::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'mac' => $faker->macAddress,
		'ip' => $faker->localIpv4,
		'Modelo_id' => $faker->randomElement($modeloID),
		'Contrato_id' => $faker->randomElement($ContratoID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
		'Area_id' => $faker->randomElement($AreaID),
	];
});

$factory->define(DispRed::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'mac' => $faker->macAddress,
		'ip' => $faker->localIpv4,
		'Modelo_id' => $faker->randomElement($modeloID),
		'Contrato_id' => $faker->randomElement($ContratoID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
		'Area_id' => $faker->randomElement($AreaID),
	];
});

$factory->define(RadioComercial::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$UbicacionID = Ubicacion::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();
	$uradioID = URadio::all()->pluck('id')->toArray();

	return [
		'serie' => $faker->numerify('############'),
		'Modelo_id' => $faker->randomElement($modeloID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
		'Ubicacion_id' => $faker->randomElement($UbicacionID),
		'URadio_id' => $faker->randomElement($uradioID),
	];
});

$factory->define(RadioTrabajo::class, function (Faker $faker) {
	
	$modeloID = ModeloRadio::all()->pluck('id')->toArray();
	$sistemaID = Sistema::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();
	$mandanteID = SATI::all()->pluck('id')->toArray();
	$uradioID = URadio::all()->pluck('id')->toArray();

	return [
		'serie' => $faker->bothify('###???####'),
		'idSistema' => $faker->randomElement($sistemaID),
		'flashport' => $faker->numerify('############'),
		'centroCostos' => $faker->bothify('??###'),
		'comodato' => $faker->numberBetween($min = 0, $max = 1),
		'ModeloRadio_id' => $faker->randomElement($modeloID),
		'Area_id' => $faker->randomElement($AreaID),
		'Contrato_id' => $faker->randomElement($ContratoID),
		'Mandante_id' => $faker->randomElement($mandanteID),
		'Tercero_id' => $faker->randomElement($mandanteID),
		'URadio_id' => $faker->randomElement($uradioID),
	];
});

$factory->define(Impresora::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'mac' => $faker->macAddress,
		'ip' => $faker->localIpv4,
		'Modelo_id' => $faker->randomElement($modeloID),
		'Area_id' => $faker->randomElement($AreaID),
		'Contrato_id' => $faker->randomElement($ContratoID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
	];
});

$factory->define(Monitor::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$ubicacionID = Ubicacion::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'Modelo_id' => $faker->randomElement($modeloID),
		'Ubicacion_id' => $faker->randomElement($ubicacionID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
	];
});

$factory->define(Celular::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$ResponsableID = SATI::all()->pluck('id')->toArray();

	return [
		'numero' => $faker->numerify('#########'),
		'imei' => $faker->numerify('#########'),
		'Modelo_id' => $faker->randomElement($modeloID),
		'Responsable_id' => $faker->randomElement($ResponsableID),
	];
});

$factory->define(CableRadiante::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();

	return [
		'Modelo_id' => $faker->randomElement($modeloID),
		'Area_id' => $faker->randomElement($AreaID),
		'Contrato_id' => $faker->randomElement($ContratoID),
	];
});

$factory->define(CarroAmplificacion::class, function (Faker $faker) {
	
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();

	return [
		'Area_id' => $faker->randomElement($AreaID),
		'Contrato_id' => $faker->randomElement($ContratoID),
	];
});

$factory->define(Repetidor::class, function (Faker $faker) {
	
	$modeloID = Modelo::all()->pluck('id')->toArray();
	$AreaID = Area::all()->pluck('id')->toArray();
	$ContratoID = Contrato::all()->pluck('id')->toArray();

	return [
		'ip' => $faker->localIpv4,
		'serial' => $faker->bothify('###???####'),
		'pot' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
		'potMin' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10),
		'potMax' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 1000),
		'Modelo_id' => $faker->randomElement($modeloID),
		'Area_id' => $faker->randomElement($AreaID),
		'Contrato_id' => $faker->randomElement($ContratoID),
	];
});

$factory->define(Activo_Empresa::class, function (Faker $faker) {
	
	$empresaID = Empresa::all()->pluck('id')->toArray();
	$activoID = Activo::all()->pluck('id')->toArray();

	return [
		'Empresa_id' => $faker->randomElement($empresaID),
		'Activo_id' => $faker->randomElement($activoID),
		'documento' => $faker->text,
	];
});

$factory->define(Activo_EstadoActivo::class, function (Faker $faker) {
	
	$estadoActivoID = EstadoActivo::all()->pluck('id')->toArray();
	$ticketID = Ticket::all()->pluck('id')->toArray();
	$activoID = Activo::all()->pluck('id')->toArray();

	return [
		'Activo_id' => $faker->randomElement($activoID),
		'EstadoActivo_id' => $faker->randomElement($estadoActivoID),
		'ticket_id' => $faker->randomElement($ticketID),
	];
});

$factory->define(EstadoActivo::class, function (Faker $faker) {
	return [
		'idCodelco' => $faker->numberBetween($min = 1, $max = 20),
		'nombre' => $faker->firstName,		
	];
});