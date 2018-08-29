<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use Illuminate\Database\Eloquent\Model;

class CarroAmplificacion extends Model
{
	protected $table = 'CarroAmplificacion';
	public $timestamps = false;

	protected $fillable = [
		// 'Area_id',
		// 'Contrato_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
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
