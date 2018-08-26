<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstSW extends Model
{
	protected $table = 'InstSW';
	public $timestamps = false;

	protected $fillable = [
		// 'Licencia_id',
		// 'SW_id',
		// 'ActivoComputo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Licencia_id')
	 * unsignedInteger('SW_id')
	 * unsignedInteger('ActivoComputo_id')
	 */

	function licencia()
	{
		return $this->belongsTo(
			Licencia::class,
			'Licencia_id',
			'id'
		);
	}

	function sw()
	{
		return $this->belongsTo(
			SW::class,
			'SW_id',
			'id'
		);
	}

	function activoComputo()
	{
		return $this->belongsTo(
			ActivoComputo::class,
			'ActivoComputo_id',
			'id'
		);
	}
}
