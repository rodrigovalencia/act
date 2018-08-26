<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
	protected $table = 'Componente';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'caracteristica',
		'nSerie',
		// 'Activo_id',
		// 'TipoComponente_id',
		// 'CategoriaComponente_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('caracteristica')
	 * string('nSerie')
	 * unsignedInteger('Activo_id')
	 * unsignedInteger('TipoComponente_id')
	 * unsignedInteger('CategoriaComponente_id')
	 */

	function activo()
	{
		return $this->belongsTo(
			Activo::class,
			'Activo_id',
			'id'
		);
	}

	function tipoComponente()
	{
		return $this->belongsTo(
			TipoComponente::class,
			'TipoComponente_id',
			'id'
		);
	}

	function catComponente()
	{
		return $this->belongsTo(
			CategoriaComponente::class,
			'CategoriaComponente_id',
			'id'
		);
	}

	function estadosComponenete()
	{
		return $this->belongsToMany(
			EstadoComponente::class,
			'Componente_EstadoComponente',
			'Componente_id',
			'EstadoComponente_id'
		)->withPivot('fecha');
	}

// Falta la relacion con las reparaciones y las mantenciones


}
