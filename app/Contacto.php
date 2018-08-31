<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	protected $table = 'Contacto';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'apPaterno',
		'apMaterno',
		'fono',
		'fecha',
		'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('apPaterno')
	 * string('apMaterno')->nullable()
	 * string('fono')->nullable()
	 * dateTime('fecha')
	 * string('documento')->nullable()
	 */

	function solicitante()
	{
		return $this->hasMany(
			Ticket::class,
			'Solicita_id',
			'id'
		);
	}

	function retirador()
	{
		return $this->hasMany(
			Ticket::class,
			'Retira_id',
			'id'
		);
	}
}
