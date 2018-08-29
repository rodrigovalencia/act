<?php

namespace App;

use App\Servicio;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
	protected $table = 'Configuracion';
	public $timestamps = false;

	protected $fillable = [
		'Configuracion_id',
		'Configuracion_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('Configuracion_id')
	 * string('Configuracion_type')
	 */

	public function servicio()
	{
		return $this->morphMany(
			Servicio::class, 
			'Servicio'
		);
	}

	public function Configuracion()
	{
		return $this->morphTo();
	}
}
