<?php

namespace App;

use App\Sistema;
use Illuminate\Database\Eloquent\Model;

class ExpReg_RT extends Model
{
	protected $table = 'ExpReg_RT';
	public $timestamps = false;

	protected $fillable = [
		// 'Sistema_id',
		'nSerie',
		'flashPort',
		'idSistema',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Sistema_id')
	 * string('nSerie')
	 * string('flashPort')
	 * string('idSistema')
	 */

	function sistema()
	{
		return $this->belongsTo(
			Sistema::class,
			'Sistema_id',
			'id'
		);
	}
}
