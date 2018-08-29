<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTicket extends Model
{
	protected $table = 'CategoriaTicket';
	public $timestamps = false;

	protected $fillable = [
		// 'Categoria_type',
		// 'Categoria_id',
		// 'EstadoActivo_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('Categoria_id')
	 * string('Categoria_type')
	 * unsignedInteger('EstadoActivo_id')
	 */

	public function Categoria()
	{
		return $this->morphTo();
	}
}
