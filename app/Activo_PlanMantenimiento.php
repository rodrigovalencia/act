<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo_PlanMantenimiento extends Model
{
	protected $table = 'Activo_PlanMantenimiento';
	public $timestamps = false;

	protected $fillable = [
		'fUltimo',
		'periodo',
		// 'Activo_id',
		// 'PlanMantenimiento_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * date('fUltimo')
	 * time('periodo')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('PlanMantenimiento_id')
	 */
}