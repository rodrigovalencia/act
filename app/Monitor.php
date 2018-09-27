<?php

namespace App;

use App\Modelo;
use App\SATI;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
	protected $table = 'Monitor';
	public $timestamps = false;

	protected $fillable = [
		// 'Modelo_id',
		// 'Ubicacion_id',
		// 'Responsable_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Ubicacion_id')
	 * unsignedInteger('Responsable_id')
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
}
