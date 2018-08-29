<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'Usuario';
	public $timestamps = false;

	protected $fillable = [
		'rut',
		// 'pass',
		'nombre',
		'apPaterno',
		'apMaterno',
		'fono',
		'mail',
		'usuarioActivo',
		// 'Rol_id',
		// 'Ubicacion_id',
		// 'TipoUsuario_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('rut')
	 * string('pass')
	 * string('nombre')
	 * string('apPaterno')
	 * string('apMaterno')->nullable()
	 * string('fono')
	 * string('mail')->nullable()
	 * boolean('usuarioActivo')
	 * unsignedInteger('Rol_id')
	 * unsignedInteger('Ubicacion_id')
	 * unsignedInteger('TipoUsuario_id')
	 */

	function rol()
	{
		return $this->belongsTo(
			'App\Rol',
			'Rol_id',
			'id'
		);
	}

	function tipoUsuario()
	{
		return $this->belongsTo(
			'App\TipoUsuario',
			'TipoUsuario_id',
			'id'
		);
	}

	function ubicacion()
	{
		return $this->belongsTo(
			'App\Ubicacion',
			'Ubicacion_id',
			'id'
		);
	}

	function servicios()
	{
		return $this->belongsToMany(
			'App\Servicio',
			'Servicio_Usuario',
			'Usuario_id',
			'Servicio_id'
		);
	}
}
