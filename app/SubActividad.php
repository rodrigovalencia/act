<?php

namespace App;

use App\Actividad;
use App\ActivoLog;
use Illuminate\Database\Eloquent\Model;

class SubActividad extends Model
{
	protected $table = 'SubActividad';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'Actividad_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('Actividad_id')
	 */

	function logs()
	{
		return $this->hasMany(
			ActivoLog::class,
			'SubActividad_id',
			'id'
		);
	}

	function actividad()
	{
		return $this->belongsTo(
			Actividad::class,
			'Actividad_id',
			'id'
		);
	}
}
