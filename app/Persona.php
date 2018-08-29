<?php

namespace App;

use App\Capacitacion;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $table = 'Persona';
	public $timestamps = false;

	protected $fillable = [
		'rut',
		'nombre',
		'nombre2',
		'apPaterno',
		'apMaterno',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('rut')
	 * string('nombre')
	 * string('nombre2')
	 * string('apPaterno')
	 * string('apMaterno')
	 */

	function oradorCap()
	{
		return $this->hasMany(
			Capacitacion::class,
			'Persona_id',
			'id'
		);
	}

	function capacitaciones()
	{
		return $this->belongsToMany(
			Capacitacion::class,
			'Capacitacion_Persona',
			'Persona_id',
			'Capacitacion_id'
		)->withPivot('asiste');
	}
}
