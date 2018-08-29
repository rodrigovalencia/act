<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo_Empresa extends Model
{
	protected $table = 'Activo_Empresa';
	public $timestamps = false;

	protected $fillable = [
		// 'Activo_id',
		// 'Empresa_id',
		// 'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('Empresa_id')
	 * string('documento')->nullable()
	 */
}
