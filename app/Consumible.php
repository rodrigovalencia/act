<?php

namespace App;

use App\Activo;
use App\ModeloConsumible;
use App\TipoConsumible;
use Illuminate\Database\Eloquent\Model;

class Consumible extends Model
{
	protected $table = 'Consumible';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'stock',
		// 'TipoConsumible_id',
		// 'ModeloConsumible_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * integer('stock')
	 * unsignedInteger('TipoConsumible_id')
	 * unsignedInteger('ModeloConsumible_id')
	 */

	function tipoConsumible()
	{
		return $this->belongsTo(
			TipoConsumible::class,
			'TipoConsumible_id',
			'id'
		);
	}

	function rol()
	{
		return $this->belongsTo(
			ModeloConsumible::class,
			'ModeloConsumible_id',
			'id'
		);
	}

	function activos()
	{
		return $this->belongsToMany(
			Activo::class,
			'Consumible_Activo',
			'Consumible_id',
			'Activo_id'
		)->withPivot('cantidad');
	}
}
