<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use App\Modelo;
use Illuminate\Database\Eloquent\Model;

class CableRadiante extends Model
{
	protected $table = 'CableRadiante';
	public $timestamps = false;

	protected $fillable = [
		// 'Modelo_id',
		// 'Area_id',
		// 'Contrato_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
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
}
