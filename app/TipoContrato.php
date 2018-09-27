<?php

namespace App;

use App\SATI;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
	protected $table = 'TipoContrato';
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

	function satis()
	{
		return $this->hasMany(
			SATI::class,
			'TipoContrato_id',
			'id'
		);
	}
}
