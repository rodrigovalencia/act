<?php

namespace App;

use App\AreaCanal;
use App\Perfil_Zona_Canal;
use App\Programacion_Activo_Canal;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
	protected $table = 'Canal';
	public $timestamps = false;

	protected $fillable = [
		// 'AreaCanal_id',
		'numero',
		'nombre',
		'abreviacion',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('AreaCanal_id')
	 * integer('numero')
	 * string('nombre')
	 * string('abreviacion')->nullable()
	 */

	function perfilZonaCanal()
	{
		return $this->hasMany(
			Perfil_Zona_Canal::class,
			'Canal_id',
			'id'
		);
	}

	function programacionActivoCanal()
	{
		return $this->hasMany(
			Programacion_Activo_Canal::class,
			'Zona_id',
			'id'
		);
	}

	function areaCanal()
	{
		return $this->belongsTo(
			AreaCanal::class,
			'AreaCanal_id',
			'id'
		);
	}
}
