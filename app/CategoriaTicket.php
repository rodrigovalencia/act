<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTicket extends Model
{
	protected $table = 'CategoriaTicket';
	public $timestamps = false;

	protected $fillable = [
		// 'categoria_type',
		// 'categoria_id',
	];

	/*
	 * Atributos 
	 *
	 * increments('id')
	 * integer('categoria_id')
	 * string('categoria_type')
	 */


	function getNombre(){
		return $this->categoria->getNombre();
	}

	public function categoria()
	{
		return $this->morphTo();
	}
}
