<?php

namespace App;

use App\InstSW;
use App\Licencia;
use App\ModeloSW;
use Illuminate\Database\Eloquent\Model;

class SW extends Model
{
	protected $table = 'SW';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'ModeloSW_id',
		'version',
		'documento',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('nombre')
	 * unsignedInteger('ModeloSW_id')
	 * string('version')
	 * string('documento')->nullable()
	 */

	function licencias()
	{
		return $this->hasMany(
			Licencia::class,
			'SW_id',
			'id'
		);
	}

	function instSWs()
	{
		return $this->hasMany(
			InstSW::class,
			'SW_id',
			'id'
		);
	}

	function modeloSW()
	{
		return $this->belongsTo(
			ModeloSW::class,
			'ModeloSW',
			'id'
		);
	}
}
