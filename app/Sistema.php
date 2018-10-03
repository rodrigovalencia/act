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
		return $this->belongsToMany(
			ModeloRadio::class,
			'ModeloRadio_Sistema',
			'Sistema_id',
			'ModeloRadio_id'
		);
	}

	function expReg()
	{
		return $this->hasOne(
			ExpReg_RT::class,
			'Sistema_id',
			'id'
		);
	}
}
