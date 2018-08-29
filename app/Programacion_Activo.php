<?php

namespace App;

use App\Activo;
use App\Perfil;
use App\Programacion;
use App\Programacion_Activo_Canal;
use App\TipoProgramacion;
use Illuminate\Database\Eloquent\Model;

class Programacion_Activo extends Model
{
	protected $table = 'Programacion_Activo';
	public $timestamps = false;

	protected $fillable = [
		// 'Programacion_id',
		// 'TipoProgramacion_id',
		// 'Activo_id',
		// 'Perfil_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Programacion_id')
	 * unsignedInteger('TipoProgramacion_id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('Perfil_id')
	 */

	function programacionActivoCanal()
	{
		return $this->hasMany(
			Programacion_Activo_Canal::class,
			'Programacion_Activo_id',
			'id'
		);
	}

	function programacion()
	{
		return $this->belongsTo(
			Programacion::class,
			'Programacion_id',
			'id'
		);
	}

	function tipoProgramacion()
	{
		return $this->belongsTo(
			TipoProgramacion::class,
			'TipoProgramacion_id',
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

	function perfil()
	{
		return $this->belongsTo(
			Perfil::class,
			'Perfil_id',
			'id'
		);
	}
}
