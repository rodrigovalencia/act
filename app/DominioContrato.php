<?php

namespace App;

use App\Contrato;
use Illuminate\Database\Eloquent\Model;

class DominioContrato extends Model
{
	protected $table = 'DominioContrato';
	public $timestamps = false;

	protected $fillable = [
		// 'dominio_id',
		// 'dominio_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('dominio_id')
	 * string('dominio_type')
	 */

	public function dominio()
	{
		return $this->morphTo();
	}

	function contratos()
	{
		return $this->hasMany(
			Contrato::class,
			'DominioContrato_id',
			'id'
		);
	}
}
