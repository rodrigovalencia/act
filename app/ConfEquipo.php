<?php

namespace App;

use App\Activo;
use App\Configuracion;
use Illuminate\Database\Eloquent\Model;

class ConfEquipo extends Model
{
	protected $table = 'ConfEquipo';
	public $timestamps = false;

	protected $fillable = [];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 */

	public function configuracion()
	{
		return $this->morphMany(
			Configuracion::class,
			'Configuracion'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'ConfEquipo_Activo',
			'ConfEquipo_id',
			'Activo_id'
		)->withPivot('detalle', 'observacion');
	}
}
