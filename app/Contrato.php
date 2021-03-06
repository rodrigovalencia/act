<?php

namespace App;

use App\CCTV;
use App\CableRadiante;
use App\CarroAmplificacion;
use App\Computador;
use App\ContratoActualizacion;
use App\DispRed;
use App\DominioContrato;
use App\Empresa;
use App\Faena;
use App\Impresora;
use App\RadioTrabajo;
use App\Repetidor;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
	protected $table = 'Contrato';
	public $timestamps = false;

	protected $fillable = [
		'numero',
		'fInicio',
		'fTermino',
		// 'Empresa_id',
		// 'DominioContrato_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedbiginteger('numero')
	 * date('fInicio')
	 * date('fTermino')
	 * unsignedInteger('Empresa_id')
	 * unsignedInteger('DominioContrato_id')
	 */

	function empresa()
	{
		return $this->belongsTo(
			Empresa::class,
			'Empresa_id',
			'id'
		);
	}

	function dominio()
	{
		return $this->belongsTo(
			DominioContrato::class,
			'DominioContrato_id',
			'id'
		);
	}

	function actualizaciones()
	{
		return $this->hasMany(
			ContratoActualizacion::class,
			'Contrato_id',
			'id'
		);
	}

	function cctvs()
	{
		return $this->hasMany(
			CCTV::class,
			'Contrato_id',
			'id'
		);
	}

	function computadores()
	{
		return $this->hasMany(
			Computador::class,
			'Contrato_id',
			'id'
		);
	}

	function dispRed()
	{
		return $this->hasMany(
			DispRed::class,
			'Contrato_id',
			'id'
		);
	}

	function radiosTrabajo()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'Contrato_id',
			'id'
		);
	}

	function impresoras()
	{
		return $this->hasMany(
			Impresora::class,
			'Contrato_id',
			'id'
		);
	}

	function cablesRadiantes()
	{
		return $this->hasMany(
			CableRadiante::class,
			'Contrato_id',
			'id'
		);
	}

	function carrosAmplificadores()
	{
		return $this->hasMany(
			CarroAmplificacion::class,
			'Contrato_id',
			'id'
		);
	}

	function repetidores()
	{
		return $this->hasMany(
			Repetidor::class,
			'Contrato_id',
			'id'
		);
	}

	function radiosComodato()
	{
		return $this->belongsToMany(
			RadioTrabajo::class,
			'DocComodato',
			'Contrato_id',
			'RadioTrabajo_id'
		)->withPivot('documento');
	}
}
