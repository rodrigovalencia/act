<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoMantencion extends Model
{
	protected $table = 'ResultadoMantencion';
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

	function rol()
	{
		return $this->hasMany(
			Mantencion_Activo_Componente::class,
			'ResultadoMantencion_id',
			'id'
		);
	}
}
