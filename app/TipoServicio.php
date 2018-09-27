<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
	protected $table = 'TipoServicio';
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

	function procedimientos()
	{
		return $this->hasMany(
			Procedimiento::class,
			'TipoServicio_id',
			'id'
		);
	}
}
