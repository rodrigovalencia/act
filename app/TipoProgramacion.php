<?php

namespace App;

use App\Programacion_Activo;
use Illuminate\Database\Eloquent\Model;

class TipoProgramacion extends Model
{
	protected $table = 'TipoProgramacion';
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

	function programacionesActivos()
	{
		return $this->hasMany(
			Programacion_Activo::class,
			'TipoProgramacion_id',
			'id'
		);
	}
}
