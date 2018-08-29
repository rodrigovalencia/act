<?php

namespace App;

use App\Mantencion;
use Illuminate\Database\Eloquent\Model;

class TipoMantencion extends Model
{
	protected $table = 'TipoMantencion';
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

	function mantenciones()
	{
		return $this->hasMany(
			Mantencion::class,
			'TipoMantencion_id',
			'id'
		);
	}
}
