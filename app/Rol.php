<?php

namespace App;

use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

	protected $table = 'Rol';
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
			'Rol_id',
			'id'
		);
	}
}
