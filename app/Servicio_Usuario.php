<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio_Usuario extends Model
{
	protected $table = 'Servicio_Usuario';
	public $timestamps = false;

	protected $fillable = [
		// 'Servicio_id',
		// 'Usuario_id',
	];

	/*
	 * Atributos 
	 *
	 * unsignedInteger('Servicio_id')
	 * unsignedInteger('Usuario_id')
	 */
}
