<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTicket extends Model
{
	protected $table = 'CategoriaTicket';
	public $timestamps = false;

	protected $fillable = [

	];

	/*
	* Atributos 
	*
	* increments('id')
	* unsignedInteger('Categoria_type')
	* unsignedInteger('Categoria_id')
	* unsignedInteger('EstadoActivo_id')
	*/

	public function Categoria()
	{
		return $this->morphTo();
	}
}
