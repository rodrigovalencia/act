<?php

namespace App;

use App\Activo;
use App\Servicio;
use Illuminate\Database\Eloquent\Model;

class MesaAyuda extends Model
{
	protected $table = 'MesaAyuda';
	public $timestamps = false;

	protected $fillable = [
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 */

	public function servicio()
	{
		return $this->morphMany(
			Servicio::class, 
			'Servicio'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'MesaAyuda_Activo',
			'MesaAyuda_id',
			'Activo_id'
		);
	}
}
