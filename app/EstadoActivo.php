<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoActivo extends Model
{
	protected $table = 'EstadoActivo';
	public $timestamps = false;

	protected $fillable = [
		'idCodelco',
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('idCodelco')
	 * string('nombre')
	 */

	function categoriasTickets()
	{
		return $this->hasMany(
			CategoriaTicket::class,
			'EstadoActivo_id',
			'id'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'Activo_EstadoActivo',
			'EstadoActivo_id',
			'Activo_id'
		);
	}
}
