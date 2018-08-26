<?php

namespace App;

use App\Componente;
use Illuminate\Database\Eloquent\Model;

class EstadoComponente extends Model
{
	protected $table = 'EstadoComponente';
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
		return $this->belongsToMany(
			Componente::class,
			'Componente_EstadoComponente',
			'EstadoComponente_id',
			'Componente_id'
		)->withPivot('fecha');
	}
}
