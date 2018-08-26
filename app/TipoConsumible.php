<?php

namespace App;

use App\Consumible;
use Illuminate\Database\Eloquent\Model;

class TipoConsumible extends Model
{
	protected $table = 'TipoConsumible';
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

	function consumibles()
	{
		return $this->hasMany(
			Consumible::class,
			'TipoConsumible_id',
			'id'
		);
	}
}
