<?php

namespace App;

use App\ActivoComputo;
use App\Configuracion;
use Illuminate\Database\Eloquent\Model;

class ConfSW extends Model
{
	protected $table = 'ConfSW';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'comentario',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('descripcion')
	 * string('comentario')->nullable()
	 */

	public function configuracion()
	{
		return $this->morphMany(
			Configuracion::class,
			'Configuracion'
		);
	}

	function activosComputos()
	{
		return $this->belongsToMany(
			ActivoComputo::class,
			'ConfSW_ActivoComputo',
			'ConfSW_id',
			'ActivoComputo_id'
		);
	}
}
