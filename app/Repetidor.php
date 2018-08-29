<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use App\Modelo;
use Illuminate\Database\Eloquent\Model;

class Repetidor extends Model
{
	protected $table = 'Repetidor';
	public $timestamps = false;

	protected $fillable = [
		// 'Modelo_id',
		// 'Area_id',
		// 'Contrato_id',
		'ip',
		'serial',
		'pot',
		'potMin',
		'potMax',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * string('ip')
	 * string('serial')
	 * double('pot')
	 * double('potMin')
	 * double('potMax')
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
