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

	public function URadio()
	{
		return $this->morphMany(
			URadio::class,
			'Uradio'
		);
	}

	function tipoBase()
	{
		return $this->belongsTo(
			TipoBase::class,
			'TipoEquipo_id',
			'id'
		);
	}
}
