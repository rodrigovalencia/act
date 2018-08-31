<?php

namespace App;

use App\Ticket;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	protected $table = 'Servicio';
	public $timestamps = false;

	protected $fillable = [
		// 'Ticket_id',
		// 'Servicio_id',
		// 'Servicio_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Ticket_id')
	 * integer('Servicio_id')
	 * string('Servicio_type')
	 */

	function Servicio()
	{
		return $this->morphTo();
	}

	function ticket()
	{
		return $this->belongsTo(
			Ticket::class,
			'Ticket_id',
			'id'
		);
	}

	function usuarios()
	{
		return $this->belongsToMany(
			Usuario::class,
			'Servicio_Usuario',
			'Servicio_id',
			'Usuario_id'
		);
	}
}
