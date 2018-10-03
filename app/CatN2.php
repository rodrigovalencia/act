<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN2 extends Model
{
	protected $table = 'CatN2';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN1_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->nombre;
	}

	function hijo()
	{
		return $this->belongsTo(
			CatN1::class,
			'CatN1_id',
			'id'
		);
	}
}
