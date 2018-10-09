<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
	protected $table = 'Procedimiento';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion',
		'documento',
		// 'TipoServicio_id',
		// 'Modelo_id'
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('descripcion')
	 * string('documento')
	 * unsignedInteger('TipoServicio_id')
	 * unsignedInteger('Modelo_id')
	 */

	function modelo()
	{
		return $this->belongsTo(
			Modelo::class,
			'Modelo_id',
			'id'
		);
	}

	function tipoServicio()
	{
		return $this->belongsTo(
			TipoServicio::class,
			'TipoServicio_id',
			'id'
		);
	}
}
