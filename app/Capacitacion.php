<?php

namespace App;

use App\Categoria;
use App\Persona;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
	protected $table = 'Capacitacion';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion',
		'fecha',
		'duracion',
		// 'Persona_id',
		// 'Usuario_id',
		// 'Categoria_id',
		'documento',
		'documento2',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('descripcion')
	 * dateTime('fecha')
	 * time('duracion')
	 * unsignedInteger('Persona_id')
	 * unsignedInteger('Usuario_id')
	 * unsignedInteger('Categoria_id')
	 * string('documento')->nullable()
	 * string('documento2')->nullable()
	 */

	function orador()
	{
		return $this->belongsTo(
			Persona::class,
			'Persona_ids',
			'id'
		);
	}

	function creador()
	{
		return $this->belongsTo(
			Usuario::class,
			'Usuario_id',
			'id'
		);
	}

	function categoria()
	{
		return $this->belongsTo(
			Categoria::class,
			'Categoria_id',
			'id'
		);
	}

	function personas()
	{
		return $this->belongsToMany(
			Persona::class,
			'Capacitacion_Persona',
			'Capacitacion_id',
			'Persona_id'
		)->withPivot('asiste');
	}
}
