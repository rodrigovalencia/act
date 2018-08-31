<?php

namespace App;

use App\InstSW;
use App\Key;
use App\Licencia;
use App\SW;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
	protected $table = 'Licencia';
	public $timestamps = false;

	protected $fillable = [
		'serie',
		'cantidad',
		'documento',
		// 'TipoLicencia_id',
		// 'SW_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * string('serie')
	 * integer('cantidad')
	 * string('documento')
	 * unsignedInteger('TipoLicencia_id')
	 * unsignedInteger('SW_id')
	 */

	function keys()
	{
		return $this->hasMany(
			Key::class,
			'Licencia_id',
			'id'
		);
	}

	function tipoLicencia()
	{
		return $this->belongsTo(
			Licencia::class,
			'Licencia_id',
			'id'
		);
	}

	function sw()
	{
		return $this->belongsTo(
			SW::class,
			'SW_id',
			'id'
		);
	}

	function instancias()
	{
		return $this->hasMany(
			InstSW::class,
			'Licencia',
			'id'
		);
	}

}
