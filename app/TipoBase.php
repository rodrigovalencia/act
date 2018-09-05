<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBase extends Model
{
	protected $table = 'TipoBase';
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

	function bases()
	{
		return $this->hasMany(
			Base::class,
			'TipoBase_id',
			'id'
		);
	}
}
