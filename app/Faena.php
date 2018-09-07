<?php

namespace App;

use App\DominioContrato;
use App\Ubicacion;
use Illuminate\Database\Eloquent\Model;

class Faena extends Model
{
	protected $table = 'Faena';
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

	function ubicaciones()
	{
		return $this->hasMany(
			Ubicacion::class,
			'Faena_id',
			'id'
		);
	}

	public function dominio()
	{
		return $this->morphMany(
			DominioContrato::class,
			'DominioContrato'
		);
	}
}
