<?php

namespace App;

use App\CatEquipo;
use App\Equipo;
use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
	protected $table = 'TipoEquipo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'CatEquipo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('CatEquipo_id')
	 */

	function equipos()
	{
		return $this->hasMany(
			Equipo::class,
			'TipoEquipo_id',
			'id'
		);
	}

	function categoria()
	{
		return $this->belongsTo(
			CatEquipo::class,
			'CatEquipo_id',
			'id'
		);
	}
}
