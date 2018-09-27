<?php

namespace App;

use App\Componente;
use App\ConfEquipo;
use App\Consumible;
use App\Empresa;
use App\EstadoActivo;
use App\Mantencion;
use App\Mantencion_Activo_Componente;
use App\PlanMantenimiento;
use App\Programacion_Activo;
use App\Reparacion;
use App\Reparacion_Activo_Componente;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
	protected $table = 'Activo';
	public $timestamps = false;

	protected $fillable = [
		// 'Estado_id',
		// 'Activo_id',
		// 'Activo_type',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * unsignedInteger('Estado_id')
	 * integer('Activo_id')
	 * string('Activo_type')
	 */

	function estados()
	{
		return $this->belongsToMany(
			EstadoActivo::class,
			'Activo_EstadoActivo',
			'Activo_id',
			'EstadoActivo_id'
		);
	}

	function propietarios()
	{
		return $this->belongsToMany(
			Empresa::class,
			'Activo_Empresa',
			'Activo_id',
			'Empresa_id'
		);
	}

	function componentes()
	{
		return $this->hasMany(
			Componente::class,
			'Activo_id',
			'id'
		);
	}

	function consumibles()
	{
		return $this->belongsToMany(
			Consumible::class,
			'Consumible_Activo',
			'Activo_id',
			'Consumible_id'
		)->withPivot('cantidad');
	}

	function programacionActivo()
	{
		return $this->hasMany(
			Programacion_Activo::class,
			'Activo_id',
			'id'
		);
	}

	function confEquipo()
	{
		return $this->belongsToMany(
			ConfEquipo::class,
			'Consumible_Activo',
			'Activo_id',
			'ConfEquipo_id'
		)->withPivot('detalle', 'observacion');
	}

	function reparaciones()
	{
		return $this->belongsToMany(
			Reparacion::class,
			'Reparacion_Activo',
			'Activo_id',
			'Reparacion_id'
		);
	}

	function reparacionComponentes()
	{
		return $this->hasMany(
			Reparacion_Activo_Componente::class,
			'Activo_id',
			'id'
		);
	}

	function mantenciones()
	{
		return $this->belongsToMany(
			Mantencion::class,
			'Mantencion_Activo',
			'Activo_id',
			'Mantencion_id'
		);
	}

	function mantencionComponentes()
	{
		return $this->hasMany(
			Mantencion_Activo_Componente::class,
			'Activo_id',
			'id'
		);
	}

	function planesMantenimiento()
	{
		return $this->belongsToMany(
			PlanMantenimiento::class,
			'Activo_PlanMantenimiento',
			'Activo_id',
			'PlanMantenimiento_id'
		)->withPivot('fUltima', 'periodo');
	}

	public function Activo()
	{
		return $this->morphTo();
	}
}
