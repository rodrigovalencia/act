<?php

namespace App;

use App\SubActividad;
use Illuminate\Database\Eloquent\Model;

class ActivoLog extends Model
{
	protected $table = 'ActivoLog';
	public $timestamps = false;

	protected $fillable = [
		'Activo_id',
		'SubActividad_id',
		'Usuario_id',
		'Ubicacion_id',
		'fecha',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('SubActividad_id')
	 * unsignedInteger('Usuario_id')
	 * unsignedInteger('Ubicacion_id')
	 * datetime('fecha')
	 */

	function subActividad()
	{
		return $this->belongsTo(
			SubActividad::class,
			'SubActividad_id',
			'id'
		);
	}
}
