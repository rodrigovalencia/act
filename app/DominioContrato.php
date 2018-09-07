<?php

namespace App;

use App\Contrato;
use Illuminate\Database\Eloquent\Model;

class DominioContrato extends Model
{
	protected $table = 'DominioContrato';
	public $timestamps = false;

	protected $fillable = [
		// 'DominioContrato_id',
		// 'DominioContrato_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('DominioContrato_id')
	 * string('DominioContrato_type')
	 */

	public function DominioContrato()
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
