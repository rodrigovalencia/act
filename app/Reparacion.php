<?php

namespace App;

use App\Activo;
use App\Reparacion_Activo_Componente;
use App\Servicio;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
	protected $table = 'Reparacion';
	public $timestamps = false;

	protected $fillable = [];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 */

	public function servicio()
	{
		return $this->morphMany(
			Servicio::class, 
			'Servicio'
		);
	}

	function reparacionActivoComponente()
	{
		return $this->hasMany(
			Reparacion_Activo_Componente::class,
			'Reparacion_id',
			'id'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'Reparacion_Activo',
			'Reparacion_id',
			'Activo_id'
		);
	}
}
