<?php

namespace App;

use App\Perfil_Zona_Canal;
use App\Programacion_Activo;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
	protected $table = 'Perfil';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('descripcion')
	 */

	function programacion()
	{
		return $this->hasMany(
			Programacion_Activo::class,
			'Perfil_id',
			'id'
		);
	}

	function perfilZonaCanal()
	{
		return $this->hasMany(
			Perfil_Zona_Canal::class,
			'Perfil_id',
			'id'
		);
	}
}
