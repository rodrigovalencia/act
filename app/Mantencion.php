<?php

namespace App;

use App\Activo;
use App\Mantencion_Activo_Componente;
use App\Servicio;
use App\TipoMantencion;
use Illuminate\Database\Eloquent\Model;

class Mantencion extends Model
{
	protected $table = 'Mantencion';
	public $timestamps = false;

	protected $fillable = [
		// 'TipoMantencion_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('TipoMantencion_id')
	 */

	public function servicio()
	{
		return $this->morphMany(
			Servicio::class, 
			'Servicio'
		);
	}

	function tipoMantencion()
	{
		return $this->belongsTo(
			TipoMantencion::class,
			'TipoMantencion_id',
			'id'
		);
	}

	function mantencionActivoComponente()
	{
		return $this->hasMany(
			Mantencion_Activo_Componente::class,
			'Mantencion_id',
			'id'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'Mantencion_Activo',
			'Mantencion_id',
			'Activo_id'
		);
	}
}
