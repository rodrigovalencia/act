<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centinela extends Model
{
	protected $table = 'Centinela';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN2_id')
	*/

	function catN5()
	{
		return $this->belongsTo(
			CatN5::class,
			'CatN5_id',
			'id'
		);
	}
	
	function catTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}	
}
