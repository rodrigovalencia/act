<?php

namespace App;

use App\RadioComercial;
use App\RadioTrabajo;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class URadio extends Model
{
	protected $table = 'URadio';
	public $timestamps = false;

	protected $fillable = [
		'Ubicacion_id',
		// 'ubicable_id',
		// 'ubicable_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Ubicacion_id')
	 * integer('ubicable_id')
	 * string('ubicable_type')
	 */

	function radioComercial()
	{
		return $this->hasOne(
			RadioComercial::class,
			'URadio_id',
			'id'
		);
	}

	function radioTrabajo()
	{
		return $this->hasOne(
			RadioTrabajo::class,
			'URadio_id',
			'id'
		);
	}

	function ubicacion()
	{
		return $this->belongsTo(
			Ubicacion::class,
			'Ubicacion_id',
			'id'
		);
	}

	public function ubicable()
	{
		return $this->morphTo();
	}
}
