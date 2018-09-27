<?php

namespace App;

use App\Perfil_Zona_Canal;
use App\Programacion_Activo_Canal;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
	protected $table = 'Zona';
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

	function perfilZonaCanal()
	{
		return $this->hasMany(
			Perfil_Zona_Canal::class,
			'Zona_id',
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
}
