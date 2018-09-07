<?php

namespace App;

use App\Fabricante;
use App\FabricanteComponente;
use App\PlanMantenimiento;
use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
	protected $table = 'TipoActivo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 */

	function fabricanteComponente()
	{
		return $this->hasMany(
			FabricanteComponente::class,
			'TipoActivo_id',
			'id'
		);
	}

	function fabricantes()
	{
		return $this->belongsToMany(
			Fabricante::class,
			'Fabricante_TipoActivo',
			'TipoActivo_id',
			'Fabricante_id'
		);
	}

	function planMantenimiento()
	{
		return $this->hasOne(
			PlanMantenimiento::class,
			'TipoActivo_id',
			'id'
		);
	}
}
