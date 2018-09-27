<?php

namespace App;

use App\Usuario;
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
			Usuario::class,
			'TipoUsuario_id',
			'id'
		);
	}
}
