<?php

namespace App;

// use App\Activo;
// use App\Consumible;
use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Consumible_Activo extends Model
{
	protected $table = 'Consumible_Activo';
	public $timestamps = false;

	protected $fillable = [
		'cantidad',
		// 'Consumible_id',
		// 'Activo_id',
		// 'Ticket_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('cantidad')
	 * unsignedInteger('Consumible_id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('Ticket_id')
	 */

	function ticket()
	{
		return $this->belongsTo(
			Ticket::class,
			'Ticket_id',
			'id'
		);
	}

	/*
	 * Estas no van
	 *
	 * Se supone que es tabla pivote
	 * Entre Consumible y Activo
	 *
	function consumible()
	{
		return $this->belongsTo(
			Consumible::class,
			'Consumible_id',
			'id'
		);
	}

	function activo()
	{
		return $this->belongsTo(
			Activo::class,
			'Activo_id',
			'id'
		);
	}
	 *
	 */
}
