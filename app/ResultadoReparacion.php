<?php

namespace App;

use App\Reparacion_Activo_Componente;
use Illuminate\Database\Eloquent\Model;

class ResultadoReparacion extends Model
{
	protected $table = 'ResultadoReparacion';
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

	function reparacionActivoComponente()
	{
		return $this->hasMany(
			Reparacion_Activo_Componente::class,
			'ResultadoReparacion_id',
			'id'
		);
	}
}
