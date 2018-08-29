<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN3 extends Model
{
	protected $table = 'CatN3';
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

	function CatN4()
	{
		return $this->hasMany(
			CatN4::class,
			'CatN3_id',
			'id'
		);		
	}

	function CatN2()
	{
		return $this->belongsTo(
			CatN2::class,
			'CatN2',
			'id'
		);
	}
}
