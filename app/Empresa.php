<?php

namespace App;

use App\Contrato;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $table = 'Empresa';
	public $timestamps = false;

	protected $fillable = [
		'rut',
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('rut')
	 * string('nombre')
	 */

	function contratos()
	{
		return $this->hasMany(
			Contrato::class,
			'Empresa_id',
			'id'
		);
	}
	
	function propiedades()
	{
		return $this->belongsToMany(
			Activo::class,
			'Activo_Empresa',
			'Empresa_id',
			'Activo_id'
		)->withPivot('documento');
	}
}
