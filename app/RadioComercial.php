<?php

namespace App;

use App\Activo;
use App\Modelo;
use App\SATI;
use App\URadio;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class RadioComercial extends Model
{
	protected $table = 'RadioComercial';
	public $timestamps = false;

	protected $fillable = [
		'serie',
		// 'Modelo_id',
		// 'Ubicacion_id',
		// 'Responsable_id',
		// 'URadio_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('serie')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Ubicacion_id')
	 * unsignedInteger('Responsable_id')
	 * unsignedInteger('URadio_id')
	 */

	public function activo()
	{
		return $this->morphMany(
			Activo::class,
			'Activo'
		);
	}

	function modelo()
	{
		return $this->belongsTo(
			Modelo::class,
			'Modelo_id',
			'id'
		);
	}

	function ubicacion()
	{
		return $this->belongsTo(
			Ubicacion::class,
			'Ubicacion_id',
			'id'
		);
	}

	function responsable()
	{
		return $this->belongsTo(
			SATI::class,
			'Responsable_id',
			'id'
		);
	}

	function ubicacionRadio()
	{
		return $this->belongsTo(
			URadio::class,
			'URadio_id',
			'id'
		);
	}
}
