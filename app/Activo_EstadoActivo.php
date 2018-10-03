<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo_EstadoActivo extends Model
{
	protected $table = 'Activo_EstadoActivo';
	public $timestamps = false;

	protected $fillable = [
		// 'fecha'
		// 'Activo_id',
		// 'EstadoActivo_id',
		// 'Ticket_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * dateTime('fecha')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('EstadoActivo_id')
	 * unsignedInteger('Servicio_id')
	 */

	function ticket()
	{
		return $this->belongsTo(
			Ticket::class,
			'Ticket_id',
			'id'
		);
	}
}
