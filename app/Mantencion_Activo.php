<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantencion_Activo extends Model
{
	protected $table = 'Mantencion_Activo';
	public $timestamps = false;

	protected $fillable = [
		'Mantencion_id',
		'Activo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Mantencion_id')
	 * unsignedInteger('Activo_id')
	 */
}
