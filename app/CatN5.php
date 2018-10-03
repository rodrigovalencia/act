<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN5 extends Model
{
	protected $table = 'CatN5';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN4_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			CatN4::class,
			'CatN4_id',
			'id'
		);
	}
}
