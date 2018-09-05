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
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('descripcion')
	 * string('documento')
	 * unsignedInteger('TipoServicio_id')
	 */

	function modelos()
	{
		return $this->hasMany(
			Modelo::class,
			'Procedimiento_id',
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
