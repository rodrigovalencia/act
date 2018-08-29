<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use App\Equipo;
use App\Modelo;
use App\SATI;
use App\TipoModelo;
use Illuminate\Database\Eloquent\Model;

class RadioTrabajo extends Model
{
	protected $table = 'RadioTrabajo';
	public $timestamps = false;

	protected $fillable = [
		'serie',
		'idSistema',
		'flashPrort',
		'centroCostos',
		'comodato',
		// 'Modelo_id',
		// 'TipoModelo_id',
		// 'Area_id',
		// 'Contrato_id',
		// 'Mandante_id',
		// 'Tercero_id',
		// 'Equipo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('serie')
	 * string('idSistema')
	 * string('flashPrort')
	 * string('centroCostos')
	 * boolean('comodato')
	 * unsignedInteger('Modelo_id')
	 * unsignedInteger('TipoModelo_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Mandante_id')
	 * unsignedInteger('Tercero_id')
	 * unsignedInteger('Equipo_id')->nullable()
	 */

	public function activo()
	{
		return $this->morphMany(
			Activo::class,
			'Activo'
		);
	}

	function modelo()
	{
		return $this->belongsTo(
			Modelo::class,
			'Modelo_id',
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

	function area()
	{
		return $this->belongsTo(
			Area::class,
			'Area_id',
			'id'
		);
	}

	function contrato()
	{
		return $this->belongsTo(
			Contrato::class,
			'Contrato_id',
			'id'
		);
	}

	function mandante()
	{
		return $this->belongsTo(
			SATI::class,
			'Mandante_id',
			'id'
		);
	}

	function tercero()
	{
		return $this->belongsTo(
			SATI::class,
			'Tercero_id',
			'id'
		);
	}

	function equipo()
	{
		return $this->belongsTo(
			Equipo::class,
			'Equipo_id',
			'id'
		);
	}

	function contComodatos()
	{
		return $this->belongsToMany(
			Contrato::class,
			'DocComodato',
			'RadioTrabajo_id',
			'Contrato_id'
		)->withPivot('documento');
	}
}
