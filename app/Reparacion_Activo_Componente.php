<?php

namespace App;

use App\Activo;
use App\Componente;
use App\Reparacion;
use App\ResultadoReparacion;
use Illuminate\Database\Eloquent\Model;

class Reparacion_Activo_Componente extends Model
{
	protected $table = 'Reparacion_Activo_Componente';
	public $timestamps = false;

	protected $fillable = [
		// 'Reparacion_id',
		// 'Activo_id',
		// 'Componente_id',
		// 'Resultado_id',
		'comentario',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Reparacion_id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('Componente_id')
	 * unsignedInteger('Resultado_id')
	 * string('comentario')
	 */


	function reparacion()
	{
		return $this->belongsTo(
			Reparacion::class,
			'Reparacion_id',
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

	function componente()
	{
		return $this->belongsTo(
			Componente::class,
			'Componente_id',
			'id'
		);
	}

	function resultado()
	{
		return $this->belongsTo(
			ResultadoReparacion::class,
			'Resultado_id',
			'id'
		);
	}
}
