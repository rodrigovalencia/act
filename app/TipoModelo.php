<?php

namespace App;

use App\RadioTrabajo;
use App\Sistema;
use Illuminate\Database\Eloquent\Model;

class TipoModelo extends Model
{
	protected $table = 'TipoModelo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'Sistema_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('Sistema_id')
	 */

	function radios()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'TipoModelo_id',
			'id'
		);
	}

	function sistema()
	{
		return $this->belongsTo(
			Sistema::class,
			'Sistema_id',
			'id'
		);
	}
}
