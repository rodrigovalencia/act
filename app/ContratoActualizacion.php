<?php

namespace App;

use App\Contrato;
use Illuminate\Database\Eloquent\Model;

class ContratoActualizacion extends Model
{
	protected $table = 'ContratoActualizacion';
	public $timestamps = false;

	protected $fillable = [
		'fecha',
		'fNueva',
		'comentario',
		// 'Contrato_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * date('fecha')
	 * date('fNueva')
	 * text('comentario')->nullable()
	 * unsignedInteger('Contrato_id')
	 */

	function contrato()
	{
		return $this->belongsTo(
			Contrato::class,
			'Contrato_id',
			'id'
		);
	}
}
