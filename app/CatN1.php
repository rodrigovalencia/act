<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN1 extends Model
{
	protected $table = 'CatN1';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	*/
}
