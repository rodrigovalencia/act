<?php

namespace App;

use App\Modelo;
use App\ModeloConsumible;
use App\ModeloSW;
use App\TipoActivo;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
	protected $table = 'Fabricante';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function modelo()
	{
		return $this->hasMany(
			Modelo::class,
			'Fabricante_id',
			'id'
		);
	}

	function modeloSW()
	{
		return $this->hasMany(
			ModeloSW::class,
			'Fabricante_id',
			'id'
		);
	}

	function modeloConsumible()
	{
		return $this->hasMany(
			ModeloConsumible::class,
			'Fabricante_id',
			'id'
		);
	}

	function tiposActivos()
	{
		return $this->belongsToMany(
			TipoActivo::class,
			'Fabricante_TipoActivo',
			'Fabricante_id',
			'TipoActivo_id'
		);
	}
}
