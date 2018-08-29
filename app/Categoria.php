<?php

namespace App;

use App\Capacitacion;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'Categoria';
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

	function capacitaciones()
	{
		return $this->hasMany(
			Capacitacion::class,
			'Categoria_id',
			'id'
		);
	}
}
