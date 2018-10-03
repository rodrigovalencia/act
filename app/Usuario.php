<?php

namespace App;

use App\ActualizacionPlan;
use App\Capacitacion;
use App\GrupoEspecialista;
use App\Rol;
use App\Servicio;
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
		'avatar',
		'usuarioActivo',
		// 'Rol_id',
		// 'Ubicacion_id',
		// 'TipoUsuario_id',
		// 'GrupoEspecialista_id'
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
	 * string('avatar')->nullable()
	 * boolean('usuarioActivo')
	 * unsignedInteger('Rol_id')
	 * unsignedInteger('Ubicacion_id')
	 * unsignedInteger('TipoUsuario_id')
	 * unsignedInteger('GrupoEspecialista_id')
	 */

	function rol()
	{
		return $this->belongsTo(
			Rol::class,
			'Rol_id',
			'id'
		);
	}

	function grupoEspecialista()
	{
		return $this->belongsTo(
			GrupoEspecialista::class,
			'GrupoEspecialista_id',
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

	function actualizaciones()
	{
		return $this->hasMany(
			ActualizacionPlan::class,
			'Usuario_id',
			'id'
		);
	}

	function capacitaciones()
	{
		return $this->hasMany(
			Capacitacion::class,
			'Usuario_id',
			'id'
		);
	}

	function hasRoles(array $roles)
	{
		foreach ($roles as $role) {
			foreach ($this->roles as $userRoles) {
				if ($userRoles->name === $role) {
					return true;
				}
			}
		}
		return false;
	}

	public function isAdmin()
	{
		return $this->hasRoles(['admin']);
	}
}
