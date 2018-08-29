<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion_Activo extends Model
{
	protected $table = 'Reparacion_Activo';
	public $timestamps = false;

	protected $fillable = [
		// 'Reparacion_id',
		// 'Activo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Reparacion_id')
	 * unsignedInteger('Activo_id')
	 */
}
