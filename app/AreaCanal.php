<?php

namespace App;

use App\Canal;
use Illuminate\Database\Eloquent\Model;

class AreaCanal extends Model
{
	protected $table = 'AreaCanal';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'letra',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * char('letra')
	 */

	function canales()
	{
		return $this->hasMany(
			Canal::class,
			'AreaCanal_id',
			'id'
		);
	}
}
