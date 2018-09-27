<?php

namespace App;

use App\Consumible;
use App\Fabricante;
use Illuminate\Database\Eloquent\Model;

class ModeloConsumible extends Model
{
	protected $table = 'ModeloConsumible';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'documento',
		// 'Fabricante_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * string('documento')->nullable()
	 * unsignedInteger('Fabricante_id')
	 */

	function consumibles()
	{
		return $this->hasMany(
			Consumible::class,
			'ModeloConsumible_id',
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
}
