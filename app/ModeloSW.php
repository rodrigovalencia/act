<?php

namespace App;

use App\Fabricante;
use App\SW;
use Illuminate\Database\Eloquent\Model;

class ModeloSW extends Model
{
	protected $table = 'ModeloSW';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'Fabricante_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('Fabricante_id')
	 */

	function sws()
	{
		return $this->hasMany(
			SW::class,
			'ModeloSW_id',
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
