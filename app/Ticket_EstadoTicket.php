<?php

namespace App;

use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class Ticket_EstadoTicket extends Model
{
	protected $table = 'Ticket_EstadoTicket';
	public $timestamps = false;

	protected $fillable = [
		// 'Ticket_id',
		// 'EstadoTicket_id',
		'fecha',
		// 'Usuario_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Ticket_id')
	 * unsignedInteger('EstadoTicket_id')
	 * dateTime('fecha')
	 * unsignedInteger('Usuario_id')
	 */

	function usuario()
	{
		return $this->belongsTo(
			Usuario::class,
			'Usuario_id',
			'id'
		);
	}
}
