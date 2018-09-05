<?php

namespace App;

use App\Activo;
use App\ActualizacionPlan;
use App\TipoActivo;
use Illuminate\Database\Eloquent\Model;

class PlanMantenimiento extends Model
{
	protected $table = 'PlanMantenimiento';
	public $timestamps = false;

	protected $fillable = [
		'fCreacion',
		// 'TipoActivo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * date('fCreacion')
	 * unsignedInteger('TipoActivo_id')
	 */

	function actualizaciones()
	{
		return $this->hasMany(
			ActualizacionPlan::class,
			'PlanMantenimiento_id',
			'id'
		);
	}

	function tipoActivo()
	{
		return $this->belongsTo(
			TipoActivo::class,
			'TipoActivo_id',
			'id'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'Activo_PlanMantenimiento',
			'PlanMantenimiento_id',
			'Activo_id'
		)->withPivot('fUltima', 'periodo');
	}
}
