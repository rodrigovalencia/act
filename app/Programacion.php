<?php

namespace App;

use App\Programacion_Activo;
use App\Servicio;
use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
	protected $table = 'Programacion';
	public $timestamps = false;

	protected $fillable = [
		'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('documento')
	 */

	public function servicio()
	{
		return $this->morphMany(
			Servicio::class, 
			'Servicio'
		);
	}

	function programacionActivo()
	{
		return $this->hasMany(
			Programacion_Activo::class,
			'Programacion_id',
			'id'
		);
	}
}
