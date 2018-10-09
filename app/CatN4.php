<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN4 extends Model
{
	protected $table = 'CatN4';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN3_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			CatN3::class,
			'CatN3_id',
			'id'
		);
	}
}
