<?php

namespace App;

use App\Key;
use Illuminate\Database\Eloquent\Model;

class TipoKey extends Model
{
	protected $table = 'TipoKey';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function keys()
	{
		return $this->hasMany(
			Key::class,
			'TipoKey_id',
			'id'
		);
	}
}
