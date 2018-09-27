<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfEquipo_Activo extends Model
{
	protected $table = 'ConfEquipo_Activo';
	public $timestamps = false;

	protected $fillable = [
		'ConfEquipo_id',
		'Activo_id',
		'detalle',
		'observacion',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('ConfEquipo_id')
	 * unsignedInteger('Activo_id')
	 * string('detalle') !!lo que hay que hacer
	 * string('observacion')->nullable() !!observaciones a la ejecucion
	 */
}
