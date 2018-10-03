<?php

namespace App;

use App\Area;
use App\DominioContrato;
use App\Faena;
use App\Monitor;
use App\RadioComercial;
use App\Ticket;
use App\URadio;
use App\Usuario;
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

	function getNombre()
	{
		return $this->faena->nombre . ' - ' . $this->nombre;
	}

	function faena()
	{
		return $this->belongsTo(
			Faena::class,
			'Faena_id',
			'id'
		);
	}

	function monitores()
	{
		return $this->hasOne(
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

	function ubicacionesRadios()
	{
		return $this->hasMany(
			URadio::class
		);
	}

	public function dominio()
	{
		return $this->morphOne(
			DominioContrato::class,
			'dominio'
		);
	}
}
