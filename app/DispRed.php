<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use App\Modelo;
use App\SATI;
use Illuminate\Database\Eloquent\Model;

class DispRed extends Model
{
	protected $table = 'DispRed';
	public $timestamps = false;

	protected $fillable = [
		'mac',
		'ip',
		// 'Modelo_id',
		// 'Area_id',
		// 'Contrato_id',
		// 'Responsable_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('mac')
	 * string('ip')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Responsable_id')
	 */

	public function activo()
	{
		return $this->morphOne(
			Activo::class,
			'Activo'
		);
	}

	public function activoComputo()
	{
		return $this->morphMany(
			ActivoComputo::class,
			'ActivoComputo'
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

	function area()
	{
		return $this->belongsTo(
			Area::class,
			'Area_id',
			'id'
		);
	}

	function contrato()
	{
		return $this->belongsTo(
			Contrato::class,
			'Contrato_id',
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
