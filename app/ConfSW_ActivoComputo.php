<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfSW_ActivoComputo extends Model
{
	protected $table = 'ConfSW_ActivoComputo';
	public $timestamps = false;

	protected $fillable = [
		'ConfSW_id',
		'ActivoComputo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('ConfSW_id')
	 * unsignedInteger('ActivoComputo_id')
	 */
}
