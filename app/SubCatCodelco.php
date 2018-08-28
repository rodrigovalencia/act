<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatCodelco extends Model
{
	protected $table = 'SubCatCodelco';
	public $timestamps = false;

	protected $fillable = [
		'nombre',

	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatTicketCodelco_id')
	*/
}
