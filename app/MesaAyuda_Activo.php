<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesaAyuda_Activo extends Model
{
	protected $table = 'MesaAyuda_Activo';
	public $timestamps = false;

	protected $fillable = [
		'MesaAyuda_id',
		'Activo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('MesaAyuda_id')
	 * unsignedInteger('Activo_id')
	 */
}
