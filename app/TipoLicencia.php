<?php

namespace App;

use App\Licencia;
use Illuminate\Database\Eloquent\Model;

class TipoLicencia extends Model
{
	protected $table = 'TipoLicencia';
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

	function licencias()
	{
		return $this->hasMany(
			Licencia::class,
			'Licencia_id',
			'id'
		);
	}
}
