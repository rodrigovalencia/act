<?php

namespace App;

use App\Licencia;
use App\TipoKey;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
	protected $table = 'Key';
	public $timestamps = false;

	protected $fillable = [
		// 'TipoKey_id',
		// 'Licencia_id',
		'serial',
		'cantidad',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('TipoKey_id')
	 * unsignedInteger('Licencia_id')
	 * string('serial')
	 * integer('cantidad')
	 */

	function tipoKey()
	{
		return $this->belongsTo(
			TipoKey::class,
			'TipoKey_id',
			'id'
		);
	}

	function licencia()
	{
		return $this->belongsTo(
			Licencia::class,
			'Licencia_id',
			'id'
		);
	}
}
