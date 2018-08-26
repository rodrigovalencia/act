<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante_TipoActivo extends Model
{
	protected $table = 'Fabricante_TipoActivo';
	public $timestamps = false;

	protected $fillable = [
		// 'Fabricante_id',
		// 'TipoActivo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Fabricante_id')
	 * unsignedInteger('TipoActivo_id')
	 */
}
