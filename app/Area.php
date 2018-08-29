<?php

namespace App;

use App\CCTV;
use App\CableRadiante;
use App\CarroAmplificacion;
use App\Computador;
use App\DispRed;
use App\Impresora;
use App\RadioTrabajo;
use App\Repetidor;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $table = 'Area';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'lat',
		'lon',
		// 'Ubicacion_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * double('lat')->nulable()
	 * double('lon')->nulable()
	 * unsignedInteger('Ubicacion_id')
	 */

	function ubicacion()
	{
		return $this->belongsTo(
			Ubicacion::class,
			'Ubicacion_id',
			'id'
		);
	}

	function cctvs()
	{
		return $this->hasMany(
			CCTV::class,
			'Area_id',
			'id'
		);
	}

	function computadores()
	{
		return $this->hasMany(
			Computador::class,
			'Area_id',
			'id'
		);
	}

	function dispRed()
	{
		return $this->hasMany(
			DispRed::class,
			'Area_id',
			'id'
		);
	}

	function radiosTrabajo()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'Area_id',
			'id'
		);
	}

	function impresoras()
	{
		return $this->hasMany(
			Impresora::class,
			'Area_id',
			'id'
		);
	}

	function cablesRadiantes()
	{
		return $this->hasMany(
			CableRadiante::class,
			'Area_id',
			'id'
		);
	}

	function carrosAmplificacion()
	{
		return $this->hasMany(
			CarroAmplificacion::class,
			'Area_id',
			'id'
		);
	}

	function repetidores()
	{
		return $this->hasMany(
			Repetidor::class,
			'Area_id',
			'id'
		);
	}
}
