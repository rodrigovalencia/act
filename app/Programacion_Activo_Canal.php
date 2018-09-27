<?php

namespace App;

use App\Canal;
use App\Programacion_Activo;
use App\Zona;
use Illuminate\Database\Eloquent\Model;

class Programacion_Activo_Canal extends Model
{
	protected $table = 'Programacion_Activo_Canal';
	public $timestamps = false;

	protected $fillable = [
		// 'Programacion_Activo_id',
		// 'Canal_id',
		// 'Zona_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Programacion_Activo_id')
	 * unsignedInteger('Canal_id')
	 * unsignedInteger('Zona_id')
	 */

	function programacionActivo()
	{
		return $this->belongsTo(
			Programacion_Activo::class,
			'Programacion_Activo_id',
			'id'
		);
	}

	function canal()
	{
		return $this->belongsTo(
			Canal::class,
			'Canal_id',
			'id'
		);
	}

	function zona()
	{
		return $this->belongsTo(
			Zona::class,
			'Zona_id',
			'id'
		);
	}
}
