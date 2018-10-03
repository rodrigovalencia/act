<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloRadio_Sistema extends Model
{
	protected $table = 'ModeloRadio_Sistema';
	public $timestamps = false;

	protected $fillable = [
		// 'ModeloRadio_id',
		// 'Sistema_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('ModeloRadio_id')
	 * unsignedInteger('Sistema_id')
	 */

}
