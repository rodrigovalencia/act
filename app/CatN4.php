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

	function CatN5()
	{
		return $this->hasMany(
			CatN5::class,
			'CatN4_id',
			'id'
		);		
	}

	function CatN3()
	{
		return $this->belongsTo(
			CatN3::class,
			'CatN3',
			'id'
		);
	}
}
