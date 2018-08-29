<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class EstadoTicket extends Model
{
	protected $table = 'EstadoTicket';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function tickets()
	{
		return $this->belongsToMany(
			Ticket::class,
			'Ticket_EstadoTicket',
			'EstadoTicket_id',
			'Ticket_id'
		)->withPivot('fecha');
	}
}
