<?php

namespace App;

use App\CCTV;
use App\Celular;
use App\Computador;
use App\Contrato;
use App\DispRed;
use App\Estado;
use App\Impresora;
use App\Monitor;
use App\RadioComercial;
use App\RadioTrabajo;
use App\TipoContrato;
use Illuminate\Database\Eloquent\Model;

class SATI extends Model
{
	protected $table = 'SATI';
	public $timestamps = false;

	protected $fillable = [
		'rut',
		'numSAP',
		'nombre',
		'nombre2',
		'apPaterno',
		'apMaterno',
		'userID',
		'fTerminoContrato',
		'cecoGrafo',
		// 'TipoContrato_id',
		// 'Contrato_id',
		// 'Estado_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('rut')
	 * integer('numSAP')->nullable()
	 * string('nombre')
	 * string('nombre2')->nullable()
	 * string('apPaterno')
	 * string('apMaterno')->nullable()
	 * string('userID')
	 * date('fTerminoContrato')
	 * string('cecoGrafo')
	 * unsignedInteger('TipoContrato_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Estado_id')
	 */

	function tipoContrato()
	{
		return $this->belongsTo(
			TipoContrato::class,
			'TipoContrato_id',
			'id'
		);
	}

	function contrato()
	{
		return $this->belongsTo(
			Contrato::class,
			'Contrato_id',
			'id'
		);
	}

	function estado()
	{
		return $this->belongsTo(
			Estado::class,
			'Estado_id',
			'id'
		);
	}
	
	function respCctvs()
	{
		return $this->hasMany(
			CCTV::class,
			'Responsable_id',
			'id'
		);
	}

	function respComputadores()
	{
		return $this->hasMany(
			Computador::class,
			'Responsable_id',
			'id'
		);
	}

	function respDispRed()
	{
		return $this->hasMany(
			DispRed::class,
			'Responsable_id',
			'id'
		);
	}

	function respRadiosComerciales()
	{
		return $this->hasMany(
			RadioComercial::class,
			'Responsable_id',
			'id'
		);
	}

	function respMandanteRT()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'Mandante_id',
			'id'
		);
	}

	function respTerceroRT()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'Tercero_id',
			'id'
		);
	}

	function respImpresoras()
	{
		return $this->hasMany(
			Impresora::class,
			'Responsable_id',
			'id'
		);
	}

	function respMonitores()
	{
		return $this->hasMany(
			Monitor::class,
			'Responsable_id',
			'id'
		);
	}

	function respCelulares()
	{
		return $this->hasMany(
			Celular::class,
			'Responsable_id',
			'id'
		);
	}
}
