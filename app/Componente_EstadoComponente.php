<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Componente_EstadoComponente extends Model
{
	protected $table = 'Componente_EstadoComponente';
	public $timestamps = false;

	protected $fillable = [
		// 'Componente_id',
		// 'EstadoComponente_id',
		// 'fecha',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Componente_id')
	 * unsignedInteger('EstadoComponente_id')
	 * datetime('fecha')
	 */
}
