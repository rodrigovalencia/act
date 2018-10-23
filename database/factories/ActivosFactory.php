<?php

use App\Area;
use App\CCTV;
use App\Celular;
use App\Computador;
use App\Contrato;
use App\DispRed;
use App\Impresora;
use App\Modelo;
use App\ModeloRadio;
use App\RadioComercial;
use App\RadioTrabajo;
use App\SATI;
use App\Sistema;
use App\URadio;
use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(CCTV::class, function (Faker $faker) {
	$flagMAC = $faker->boolean(90);
	$flagIP = $faker->boolean(80);
	
	$modeloID      = Modelo::all()->random()->id;
	$contratoID    = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;
	$areaID        = Area::all()->random()->id;

	return [
		'mac'            => ($flagMAC) ? $faker->macAddress : null,
		'ip'             => ($flagIP) ? $faker->localIpv4 : null,
		'Modelo_id'      => $modeloID,
		'Contrato_id'    => $contratoID,
		'Responsable_id' => $responsableID,
		'Area_id'        => $areaID,
	];
});

$factory->define(Computador::class, function (Faker $faker) {
	$flagIP = $faker->boolean(80);
	
	$modeloID = Modelo::all()->random()->id;
	$areaID = Area::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'mac' => $faker->macAddress,
		'ip' => ($flagIP) ? $faker->localIpv4 : null,
		'Modelo_id' => $modeloID,
		'Area_id' => $areaID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
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
		'Area_id' => $areaID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
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
		'Ubicacion_id' => $ubicacionID,
		'Responsable_id' => $responsableID,
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
	$flagTercero = $faker->boolean(60);
	$flagUbicacion = $faker->boolean(60);
	
	$satis = SATI::all()->pluck('id');
	$sistema = Sistema::all()->random();

	if ($sistema->nombre === 'P25 - TRUNKING') {
		$exp1 = '[0-9]{3}[a-z]{3}[0-9]{4}';
		$exp2 = '[0-9]{10}';
		$exp3 = '[0-9]{7}';
	} else if ($sistema->nombre === 'P16 - TRUNKING') {
		$exp1 = '[0-9]{3}[a-z]{3}[0-9]{4}';
		$exp2 = '[0-9]{10}';
		$exp3 = '[0-9]{6}';
	} else {
		$exp1 = '([0-9]{3}[a-z]{3}[0-9]{4}|[0-9]{3}[a-z]{4}[0-9]{3})';
		$exp2 = '';
		$exp3 = '[0-9]{4}';
	}

	$contratoID = Contrato::all()->random()->id;

	return [
		'serie'          => $faker->regexify($exp1),
		'idSistema'      => $faker->regexify($exp3),
		'flashPort'      => ($exp2 === '') ? null : $faker->regexify($exp2),
		'centroCostos'   => $faker->regexify('([a-z]{2}[0-9]{3}|[0-9]{10})'),
		'comodato'       => $faker->boolean(60),
		//NO ME GUSTA ESTO DE ACA ....
		'ModeloRadio_id' => ModeloRadio::all()->random()->id,
		//NO ME GUSTA ESTO DE ACA ....
		'Area_id'        => Area::all()->random()->id,
		'Contrato_id'    => $contratoID,
		'Mandante_id'    => $satis->random(),
		'Tercero_id'     => ($flagTercero) ? $satis->random() : null,
		//NO ME GUSTA ESTO DE ACA ....
		'URadio_id'      => ($flagUbicacion) ? URadio::all()->random()->id : null,
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
	$flagIP = $faker->boolean(80);

	$modeloID = Modelo::all()->random()->id;
	$areaID = Area::all()->random()->id;
	$contratoID = Contrato::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'mac' => $faker->macAddress,
		'ip' => ($flagIP) ? $faker->localIpv4 : null,
		'Modelo_id' => $modeloID,
		'Area_id' => $areaID,
		'Contrato_id' => $contratoID,
		'Responsable_id' => $responsableID,
	];
});

$factory->define(Celular::class, function (Faker $faker) {
	$modeloID = Modelo::all()->random()->id;
	$responsableID = SATI::all()->random()->id;

	return [
		'numero' => $faker->regexify('(9[6-9][0-9]{7})'),
		'imei' => $faker->regexify('([0-9]{15,17})'),
		'Modelo_id' => $modeloID,
		'Responsable_id' => $responsableID,
	];
});