<?php

namespace App;

use App\Activo;
use App\Modelo;
use App\SATI;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
	protected $table = 'Celular';
	public $timestamps = false;

	protected $fillable = [
		'numero',
		'imei',
		// 'Modelo_id',
		// 'Responsable_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('numero')
	 * integer('imei')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Responsable_id')
	 */

	public function activo()
	{
		return $this->morphMany(
			Activo::class,
			'Activo'
		);
	}

	function modelo()
	{
		return $this->belongsTo(
			Modelo::class,
			'Modelo_id',
			'id'
		);
	}

	function responsable()
	{
		return $this->belongsTo(
			SATI::class,
			'Responsable_id',
			'id'
		);
	}
}
