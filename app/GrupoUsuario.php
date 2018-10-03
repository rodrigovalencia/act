<?php

namespace App;

use App\GrupoEspecialista;
use Illuminate\Database\Eloquent\Model;

class GrupoUsuario extends Model
{
	protected $table = 'GrupoUsuario';
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

	function gruposEspecialistas()
	{
		return $this->hasMany(
			GrupoEspecialista::class,
			'GrupoUsuario_id',
			'id'
		);
	}
}
