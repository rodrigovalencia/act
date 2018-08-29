<?php

namespace App;

use App\TipoModelo;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
	protected $table = 'Sistema';
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

	function tiposModelos()
	{
		return $this->hasMany(
			TipoModelo::class,
			'Sistema_id',
			'id'
		);
	}
}
