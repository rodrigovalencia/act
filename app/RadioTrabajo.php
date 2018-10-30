<?php

namespace App;

use App\Activo;
use App\Area;
use App\Contrato;
use App\Modelo;
use App\SATI;
use App\TipoModelo;
use App\URadio;
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
		// 'ModeloRadio_id',
		// 'Area_id',
		// 'Contrato_id',
		// 'Mandante_id',
		// 'Tercero_id',
		// 'URadio_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('serie')
	 * string('idSistema')
	 * string('flashPort')->nullable()
	 * string('centroCostos')
	 * boolean('comodato')
	 * unsignedInteger('ModeloRadio_id')
	 * unsignedInteger('Area_id')
	 * unsignedInteger('Contrato_id')
	 * unsignedInteger('Mandante_id')
	 * unsignedInteger('Tercero_id')->nullable()
	 * unsignedInteger('URadio_id')->nullable()
	 */

	public function activo()
	{
		return $this->morphOne(
			Activo::class,
			'Activo'
		);
	}

	function modeloRadio()
	{
		return $this->belongsTo(
			ModeloRadio::class,
			'ModeloRadio_id',
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

	function ubicacionRadio()
	{
		return $this->belongsTo(
			URadio::class,
			'URadio_id',
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
