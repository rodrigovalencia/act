<?php

namespace App;

use App\PlanMantenimiento;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class ActualizacionPlan extends Model
{
	protected $table = 'ActualizacionPlan';
	public $timestamps = false;

	protected $fillable = [
		'fecha',
		'documento',
		// 'Usuario_id',
		// 'PlanMantenimiento_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * date('fecha')
	 * string('documento')
	 * unsignedInteger('Usuario_id')
	 * unsignedInteger('PlanMantenimiento_id')
	 */

	function usuario()
	{
		return $this->belongsTo(
			Usuario::class,
			'Usuario_id',
			'id'
		);
	}

	function planMantenimiento()
	{
		return $this->belongsTo(
			PlanMantenimiento::class,
			'PlanMantenimiento_id',
			'id'
		);
	}
}
