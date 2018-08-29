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

	function CategoriaTicket()
	{
		return $this->hasMany(
			CategoriaTicket::class,
			'Categoria_id',
			'id'
		);		
	}

	function CatN5()
	{
		return $this->belongsTo(
			CatN5::class,
			'CatN5',
			'id'
		);
	}
	
	function CatTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}	
}
