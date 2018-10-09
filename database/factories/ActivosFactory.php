<?php

use App\Area;
use App\CCTV;
use App\Computador;
use App\Contrato;
use App\DispRed;
use App\Modelo;
use App\ModeloRadio;
use App\RadioComercial;
use App\RadioTrabajo;
use App\SATI;
use App\Sistema;
use App\URadio;
use App\Ubicacion;
use Faker\Generator as Faker;


// -- ACTIVOS --
			// Activo_Empresa
			// --
			// RadioComercial
			// RadioTrabajo
			// Impresora
			// Celular



$factory->define(CCTV::class, function (Faker $faker) {
	$flagMAC = $faker->boolean(90);
	$flagIP = $faker->boolean(80);
	
	$modeloID = Modelo::all()->random()->id;
	$areaID = Area::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'mac' => ($flagSAP) ? $faker->macAddress : null,
		'ip' => ($flagSAP) ? $faker->localIpv4 : null,
		'Modelo_id' => $modeloID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
		'Area_id' => $areaID,
	];
});

$factory->define(Computador::class, function (Faker $faker) {
	$flagMAC = $faker->boolean(90);
	$flagIP = $faker->boolean(80);
	
	$modeloID = Modelo::all()->random()->id;
	$areaID = Area::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'mac' => ($flagSAP) ? $faker->macAddress : null,
		'ip' => ($flagSAP) ? $faker->localIpv4 : null,
		'Modelo_id' => $modeloID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
		'Area_id' => $areaID,
	];
});

$factory->define(DispRed::class, function (Faker $faker) {
	$modeloID = Modelo::all()->random()->id;
	$areaID = Area::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'mac' => $faker->macAddress,
		'ip' => $faker->localIpv4,
		'Modelo_id' => $modeloID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
		'Area_id' => $areaID,
	];
});

$factory->define(RadioComercial::class, function (Faker $faker) {
	$modeloID = Modelo::all()->random()->id;
	$ubicacionID = Ubicacion::all()->random()->id;
	$responsableID = SATI::all()->random()->id;
	$uRadioID = URadio::all()->random()->id;

	return [
		'serie' => $faker->regexify('[0-9]{12}'),
		'Modelo_id' => $modeloID,
		'Responsable_id' => $responsableID,
		'Ubicacion_id' => $ubicacionID,
		'URadio_id' => $uRadioID,
	];
});



	/*
	 * Atributos RadioTrabajo
	 *
	 * increments('id')
	 * string('serie')
	 * string('idSistema')
	 * string('flashPort')->nullable()
	 * string('centroCostos')
	 * boolean('comodato')
	 * unsignedInteger('ModeloRadio_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Mandante_id')
	 * unsignedInteger('Tercero_id')->nullable()
	 * unsignedInteger('URadio_id')->nullable()
	 */
$factory->define(RadioTrabajo::class, function (Faker $faker) {
	$flagFlash = $faker->boolean(90);
	$flagTercero = $faker->boolean(60);
	
	$satis = SATI::all()->pluck('id');
	$sistema = Sistema::all()->random();

	if ($sistema->nombre === 'P25 - TRUNKING') {
		$exp1 = '[0-9]{3}[a-z]{3}[0-9]{4}';
		$exp2 = '[0-9]{10}';
		$exp3 = '[0-9]{7}';
	} else if ($sistema->nombre === 'P16 - TRUNKING') {
		# code...
	} else {
		# code...
	}


		$sistemaID = Sistema::where('nombre', 'P25 - TRUNKING')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA9999',     // (0-9){3}(a-z){3}(0-9){4}
			'flashPort'  => '9999999999',     // (0-9){10}
			'idSistema'  => '9999999',        // (0-9){7}
			'Sistema_id' => $sistemaID,
		]);

		$sistemaID = Sistema::where('nombre', 'P25 - TRUNKING')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA9999',     // (0-9){3}(a-z){3}(0-9){4}
			'flashPort'  => '9999999999',     // (0-9){10}
			'idSistema'  => '999999',         // (0-9){6}
			'Sistema_id' => $sistemaID,
		]);

		$sistemaID = Sistema::where('nombre', 'P25 - TRUNKING')->first()->id;
		ExpReg_RT::create([
			'nSerie'     => '999AAA(9|A)999', // (0-9){3}(a-z){3}(0-9|a-z)(0-9){3}
			'idSistema'  => '9999',           // (0-9){4}
			'Sistema_id' => $sistemaID,
		]);

	

	$modeloID = ModeloRadio::all()->random()->id;
	$AreaID = Area::all()->random()->id;
	$ContratoID = Contrato::all()->random()->id;
	$uradioID = URadio::all()->random()->id;

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

	/*
	 * Atributos Impresora
	 *
	 * increments('id')
	 * string('mac')
	 * string('ip')->nullable()
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Responsable_id')
	 */


	/*
	 * Atributos Celular
	 *
	 * increments('id')
	 * integer('numero')
	 * integer('imei')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Responsable_id')
	 */







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