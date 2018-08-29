<?php

namespace App;

use App\Canal;
use App\Perfil;
use App\Zona;
use Illuminate\Database\Eloquent\Model;

class Perfil_Zona_Canal extends Model
{
	protected $table = 'Perfil_Zona_Canal';
	public $timestamps = false;

	protected $fillable = [
		// 'Perfil_id',
		// 'Zona_id',
		// 'Canal_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Perfil_id')
	 * unsignedInteger('Zona_id')
	 * unsignedInteger('Canal_id')
	 */

	function perfil()
	{
		return $this->belongsTo(
			Perfil::class,
			'Perfil_id',
			'id'
		);
	}

	function zona()
	{
		return $this->belongsTo(
			Zona::class,
			'Zona_id',
			'id'
		);
	}

	function canal()
	{
		return $this->belongsTo(
			Canal::class,
			'Canal_id',
			'id'
		);
	}
}
