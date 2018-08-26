<?php

namespace App;

use App\SATI;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
	protected $table = 'Estado';
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
			'Estado_id',
			'id'
		);
	}
}
