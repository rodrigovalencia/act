<?php

namespace App;

use App\RadioComercial;
use App\RadioTrabajo;
use App\TipoEquipo;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	protected $table = 'Equipo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'TipoEquipo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
     * unsignedInteger('TipoEquipo_id')
	 */

	function tipoEquipo()
	{
		return $this->belongsTo(
			TipoEquipo::class,
			'TipoEquipo_id',
			'id'
		);
	}

	function radioComercial()
	{
		return $this->hasOne(
			RadioComercial::class,
			'Equipo_id',
			'id'
		);
	}

	function radioTrabajo()
	{
		return $this->hasOne(
			RadioTrabajo::class,
			'Equipo_id',
			'id'
		);
	}
}
