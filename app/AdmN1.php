<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmN1 extends Model
{
	protected $table = 'AdmN1';
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
