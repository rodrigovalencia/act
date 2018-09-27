<?php

namespace App;

use App\ModeloRadio;
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

	function modelosRadio()
	{
		return $this->hasMany(
			ModeloRadio::class,
			'Sistema_id',
			'id'
		);
	}
}
