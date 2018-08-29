<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FabricanteComponente_TipoComponente extends Model
{
	protected $table = 'FabricanteComponente_TipoComponente';
	public $timestamps = false;

	protected $fillable = [
		// 'FabricanteComponente_id',
		// 'TipoComponente_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('FabricanteComponente_id')
	 * unsignedInteger('TipoComponente_id')
	 */
}
