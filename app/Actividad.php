<?php

namespace App;

use App\SubActividad;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	protected $table = 'Actividad';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function subActividades()
	{
		return $this->hasMany(
			SubActividad::class,
			'Actividad_id',
			'id'
		);
	}
}
