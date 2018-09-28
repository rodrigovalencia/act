<?php

namespace App;

use App\TipoEquipo;
use App\URadio;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	protected $table = 'Equipo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'TipoEquipo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('nombre')
     * unsignedInteger('TipoEquipo_id')
	 */

	public function getNombre()
	{
		return $this->tipoEquipo->categoria->nombre . ' - ' . $this->tipoEquipo->nombre . ' - ' . $this->nombre;
	}

	public function URadio()
	{
		return $this->morphMany(
			URadio::class,
			'URadio'
		);
	}

	function tipoEquipo()
	{
		return $this->belongsTo(
			TipoEquipo::class,
			'TipoEquipo_id',
			'id'
		);
	}
}
