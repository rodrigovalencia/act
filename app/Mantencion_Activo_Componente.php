<?php

namespace App;

use App\Activo;
use App\Componente;
use App\Mantencion;
use App\ResultadoMantencion;
use Illuminate\Database\Eloquent\Model;

class Mantencion_Activo_Componente extends Model
{
	protected $table = 'Mantencion_Activo_Componente';
	public $timestamps = false;

	protected $fillable = [
		// 'Mantencion_id',
		// 'Activo_id',
		// 'Componente_id',
		// 'Resultado_id',
	];

	/*
	 * Atributos 		
	 *
	 * increments('id')
	 * unsignedInteger('Mantencion_id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('Componente_id')
	 * unsignedInteger('Resultado_id')
	 */

	function mantencion()
	{
		return $this->belongsTo(
			Mantencion::class,
			'Mantencion_id',
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
			ResultadoMantencion::class,
			'Resultado_id',
			'id'
		);
	}
}
