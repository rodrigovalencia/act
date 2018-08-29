<?php

namespace App;

// use App\Activo_EstadoActivo;
use App\CategoriaTicket;
// use App\Consumible_Activo;
use App\Contacto;
use App\EstadoTicket;
use App\Servicio;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $table = 'Ticket';
	public $timestamps = false;

	protected $fillable = [
		'fInicio',
		'fCompromiso',
		'fTermino',
		// 'CategoriaTicket_id',
		// 'Solicita_id',
		// 'Retira_id',
		// 'Ubicacion_id',
		'observaciones',
		'observaciones2',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * date('fInicio')
	 * date('fCompromiso')
	 * date('fTermino')
	 * unsignedInteger('CategoriaTicket_id')
	 * unsignedInteger('Solicita_id')
	 * unsignedInteger('Retira_id')
	 * unsignedInteger('Ubicacion_id')
	 * text('observaciones')
	 * text('observaciones2')
	 */

	function catTicket()
	{
		return $this->belongsTo(
			CategoriaTicket::class,
			'CategoriaTicket_id',
			'id'
		);
	}

	function solicita()
	{
		return $this->belongsTo(
			Contacto::class,
			'Solicita_id',
			'id'
		);
	}

	function retira()
	{
		return $this->belongsTo(
			Contacto::class,
			'Retira_id',
			'id'
		);
	}

	function ubicacion()
	{
		return $this->belongsTo(
			Ubicacion::class,
			'Ubicacion_id',
			'id'
		);
	}

	function servicios()
	{
		return $this->hasMany(
			Servicio::class,
			'Ticket_id',
			'id'
		);
	}

	function estadosTicket()
	{
		return $this->belongsToMany(
			EstadoTicket::class,
			'Ticket_EstadoTicket',
			'Ticket_id',
			'EstadoTicket_id'
		)->withPivot('fecha');
	}
	/*
	 * No deberian ir
	 *
	function Consumible_Activo()
	{
		return $this->hasMany(
			Consumible_Activo::class,
			'Ticket_id',
			'id'
		);
	}

	function Activo_EstadoActivo()
	{
		return $this->hasMany(
			Activo_EstadoActivo::class,
			'Ticket_id',
			'id'
		);
	}
	 *
	 */
}
