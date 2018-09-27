<?php

namespace App;

use App\CCTV;
use App\CableRadiante;
use App\Celular;
use App\Computador;
use App\DispRed;
use App\Fabricante;
use App\Impresora;
use App\Monitor;
use App\Procedimiento;
use App\RadioComercial;
use App\RadioTrabajo;
use App\Repetidor;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
	protected $table = 'Modelo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'documento',
		// 'Fabricante_id',
		// 'Procedimiento_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('documento')->nullable()
	 * unsignedInteger('Fabricante_id')
	 * unsignedInteger('Procedimiento_id')
	 */

	function fabricante()
	{
		return $this->belongsTo(
			Fabricante::class,
			'Fabricante_id',
			'id'
		);
	}

	function procedimiento()
	{
		return $this->belongsTo(
			Procedimiento::class,
			'Procedimiento_id',
			'id'
		);
	}

	function cctvs()
	{
		return $this->hasMany(
			CCTV::class,
			'Modelo_id',
			'id'
		);
	}

	function computadores()
	{
		return $this->hasMany(
			Computador::class,
			'Modelo_id',
			'id'
		);
	}

	function dispRed()
	{
		return $this->hasMany(
			DispRed::class,
			'Modelo_id',
			'id'
		);
	}

	function radiosComerciales()
	{
		return $this->hasMany(
			RadioComercial::class,
			'Modelo_id',
			'id'
		);
	}

	function impresoras()
	{
		return $this->hasMany(
			Impresora::class,
			'Modelo_id',
			'id'
		);
	}

	function monitores()
	{
		return $this->hasMany(
			Monitor::class,
			'Modelo_id',
			'id'
		);
	}

	function celulares()
	{
		return $this->hasMany(
			Celular::class,
			'Modelo_id',
			'id'
		);
	}

	function cablesRadiantes()
	{
		return $this->hasMany(
			CableRadiante::class,
			'Modelo_id',
			'id'
		);
	}

	function repetidores()
	{
		return $this->hasMany(
			Repetidor::class,
			'Modelo_id',
			'id'
		);
	}
}
