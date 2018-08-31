<?php

namespace App;

use App\ModeloRadio;
use Illuminate\Database\Eloquent\Model;

class TipoModelo extends Model
{
	protected $table = 'TipoModelo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function modelosRadio()
	{
		return $this->hasMany(
			ModeloRadio::class,
			'TipoModelo_id',
			'id'
		);
	}
}
