<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaComponente extends Model
{
	protected $table = 'CategoriaComponente';
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

	function componentes()
	{
		return $this->hasMany(
			Componente::class,
			'CategoriaComponente_id',
			'id'
		);
	}
}
