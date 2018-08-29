<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocComodato extends Model
{
	protected $table = 'DocComodato';
	public $timestamps = false;

	protected $fillable = [
		// 'RadioTrabajo_id',
		// 'Contrato_id',
		// 'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('RadioTrabajo_id')
	 * unsignedInteger('Contrato_id')
	 * string('documento')
	 */
}
