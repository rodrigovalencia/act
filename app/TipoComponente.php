<?php

namespace App;

use App\Componente;
use App\FabricanteComponente;
use Illuminate\Database\Eloquent\Model;

class TipoComponente extends Model
{
	protected $table = 'TipoComponente';
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

	function componentes()
	{
		return $this->hasMany(
			Componente::class,
			'TipoComponente_id',
			'id'
		);
	}

	function servicios()
	{
		return $this->belongsToMany(
			FabricanteComponente::class,
			'FabricanteComponente_TipoComponente',
			'TipoComponente_id',
			'FabricanteComponente_id'
		);
	}
}
