<?php

namespace App;

use App\GrupoUsuario;
use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class GrupoEspecialista extends Model
{
	protected $table = 'GrupoEspecialista';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'GrupoUsuario_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('GrupoUsuario_id')
	 */

	function grupoUsuarios()
	{
		return $this->belongsTo(
			GrupoUsuario::class,
			'GrupoUsuario_id',
			'id'
		);
	}

	function usuarios()
	{
		return $this->hasMany(
			Usuario::class,
			'GrupoEspecialista_id',
			'id'
		);
	}
}
