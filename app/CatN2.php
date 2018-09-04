<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatN2 extends Model
{
	protected $table = 'CatN2';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN1_id')
	*/

	function catN3()
	{
		return $this->hasMany(
			CatN3::class,
			'CatN2_id',
			'id'
		);		
	}

	function catN1()
	{
		return $this->belongsTo(
			CatN1::class,
			'CatN1_id',
			'id'
		);
	}

	function catN1_Name()
	{
		return $this->catN1->nombre;
	}
}
