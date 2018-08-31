<?php

namespace App;

use App\Rol;
use App\Servicio;
use App\TipoUsuario;
use App\Ubicacion;
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
			Rol::class,
			'Rol_id',
			'id'
		);
	}

	function tipoUsuario()
	{
		return $this->belongsTo(
			TipoUsuario::class,
			'TipoUsuario_id',
			'id'
		);
	}

	function ubicacion()
	{
		return $this->belongsTo(
			Ubicacion::class,
			'Ubicacion_id',
			'id'
		);
	}

	function servicios()
	{
		return $this->belongsToMany(
			Servicio::class,
			'Servicio_Usuario',
			'Usuario_id',
			'Servicio_id'
		);
	}
}
