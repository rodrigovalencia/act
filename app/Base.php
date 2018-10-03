<?php

namespace App;

use App\TipoBase;
use App\URadio;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
	protected $table = 'Base';
	public $timestamps = false;

	protected $fillable = [
		'direccion',
		'TipoBase_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('direccion')
	 * unsignedInteger('TipoBase_id')
	 */

	public function getNombre()
	{
		return $this->tipoBase->nombre . ' - ' . $this->nombre;
	}

	public function ubicacionRadio()
	{
		return $this->morphOne(
			URadio::class,
			'ubicable'
		);
	}

	function tipoBase()
	{
		return $this->belongsTo(
			TipoBase::class,
			'TipoBase_id',
			'id'
		);
	}
}
