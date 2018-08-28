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

	function Centinela()
	{
		return $this->hasMany(
			Centinela::class,
			'CatN5_id',
			'id'
		);		
	}

	function CatN4()
	{
		return $this->belongsTo(
			CatN4::class,
			'CatN4',
			'id'
		);
	}
}
