<?php

namespace App;

use App\Modelo;
use App\ModeloConsumible;
use App\ModeloRadio;
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

	function modelos()
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

	function belongsToTipoActivo($a)
	{
		$tiposActivos = $this->tiposActivos()->pluck('nombre');
		return $tiposActivos->contains($a);
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

	function modelosRadio()
	{
		return $this->hasMany(
			ModeloRadio::class,
			'Fabricante_id',
			'id'
		);
	}
}
