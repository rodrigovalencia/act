<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo_EstadoActivo extends Model
{
	protected $table = 'Activo_EstadoActivo';
	public $timestamps = false;

	protected $fillable = [
		// 'Activo_id',
		// 'EstadoActivo_id',
		// 'Ticket_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('EstadoActivo_id')
	 * unsignedInteger('Ticket_id')
	 */

	function ticket()
	{
		//*Si tengo la fk
		return $this->belongsTo(
			Ticket::class,
			//*FK que yo poseo
			'Ticket_id',
			'id'
		);
	}
}
