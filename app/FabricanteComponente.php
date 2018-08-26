<?php

namespace App;

use App\TipoActivo;
use App\TipoComponente;
use Illuminate\Database\Eloquent\Model;

class FabricanteComponente extends Model
{
	protected $table = 'FabricanteComponente';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'TipoActivo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('TipoActivo_id')
	 */

	function tipoActivo()
	{
		return $this->belongsTo(
			TipoActivo::class,
			'TipoActivo_id',
			'id'
		);
	}

	function tiposComponentes()
	{
		return $this->belongsToMany(
			TipoComponente::class,
			'FabricanteComponente_TipoComponente',
			'FabricanteComponente_id',
			'TipoComponente_id'
		);
	}
}
