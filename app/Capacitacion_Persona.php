<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion_Persona extends Model
{
	protected $table = 'Capacitacion_Persona';
	public $timestamps = false;

	protected $fillable = [
		// 'Capacitacion_id',
		// 'Persona_id',
		// 'asiste',
	];

	/*
	 * Atributos 
	 *
	 * unsignedInteger('Capacitacion_id')
	 * unsignedInteger('Persona_id')
	 * boolean('asiste')
	 */
}
