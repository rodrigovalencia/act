<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCodelco extends Model
{
	protected $table = 'CatCodelco';
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

	function SubCatCodelco()
	{
		return $this->belongsTo(
			SubCatCodelco::class,
			'SubCatCodelco',
			'id'
		);
	}

	function CatTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}
}
