<?php

namespace App;

use App\Faena;
use App\Monitor;
use App\RadioComercial;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
	protected $table = 'Ubicacion';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'Faena_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('Faena_id')
	 */

	function faena()
	{
		return $this->belongsTo(
			Faena::class,
			'Faena_id',
			'id'
		);
	}

	//¿¿Cuantos monitores??
	function monitores()
	{
		return $this->hasMany(
			Monitor::class,
			'Ubicacion_id',
			'id'
		);
	}

	function usuarios()
	{
		return $this->hasMany(
			Usuario::class,
			'Ubicacion_id',
			'id'
		);
	}

	function tickets()
	{
		return $this->hasMany(
			Ticket::class,
			'Ubicacion_id',
			'id'
		);
	}

	function areas()
	{
		return $this->hasMany(
			Area::class,
			'Ubicacion_id',
			'id'
		);
	}

	function radiosComerciales()
	{
		return $this->hasMany(
			RadioComercial::class,
			'Ubicacion_id',
			'id'
		);
	}

	function contratos()
	{
		return $this->hasMany(
			Contrato::class,
			'Ubicacion_id',
			'id'
		);
	}
}
