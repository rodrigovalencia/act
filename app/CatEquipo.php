<?php

namespace App;

use App\TipoEquipo;
use Illuminate\Database\Eloquent\Model;

class CatEquipo extends Model
{
	protected $table = 'CatEquipo';
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

	function tiposEquipos()
	{
		return $this->hasMany(
			TipoEquipo::class,
			'CatEquipo_id',
			'id'
		);
	}
}
