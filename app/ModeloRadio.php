<?php

namespace App;

use App\Fabricante;
use App\Sistema;
use App\TipoModelo;
use Illuminate\Database\Eloquent\Model;

class ModeloRadio extends Model
{
	protected $table = 'ModeloRadio';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'Sistema_id',
		// 'TipoModelo_id',
		// 'Fabricante_id',
		'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('Sistema_id')
	 * unsignedInteger('TipoModelo_id')
	 * unsignedInteger('Fabricante_id')
	 * string('documento')->nullable()
	 */

	function sistema()
	{
		return $this->belongsTo(
			Sistema::class,
			'Sistema_id',
			'id'
		);
	}

	function tipoModelo()
	{
		return $this->belongsTo(
			TipoModelo::class,
			'TipoModelo_id',
			'id'
		);
	}

	function fabricante()
	{
		return $this->belongsTo(
			Fabricante::class,
			'Fabricante_id',
			'id'
		);
	}

	function radiosTrabajo()
	{
		return $this->hasMany(
			RadioTrabajo::class,
			'ModeloRadio_id',
			'id'
		);
	}
}
