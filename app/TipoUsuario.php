<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
	protected $table = 'TipoUsuario';
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

	function usuarios()
	{
		return $this->hasMany(
			'App\Usuario',
			'TipoUsuario_id',
			'id'
		);
	}
}
