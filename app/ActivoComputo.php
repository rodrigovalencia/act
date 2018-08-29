<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivoComputo extends Model
{
	protected $table = 'ActivoComputo';
	public $timestamps = false;

	protected $fillable = [
		// 'ActivoComputo_id'
		// 'ActivoComputo_type'
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('ActivoComputo_id')
	 * string('ActivoComputo_type')
	 */

	public function ActivoComputo()
	{
		return $this->morphTo();
	}

	function instSW()
	{
		return $this->hasMany(
			InstSW::class,
			'ActivoComputo_id',
			'id'
		);
	}

	function servicios()
	{
		return $this->belongsToMany(
			ConfSW::class,
			'ConfSW_ActivoComputo',
			'ActivoComputo_id',
			'ConfSW_id'
		);
	}
}
