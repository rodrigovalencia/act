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

	function centinela()
	{
		return $this->hasMany(
			Centinela::class,
			'CatN5_id',
			'id'
		);		
	}

	function catN4()
	{
		return $this->belongsTo(
			CatN4::class,
			'CatN4_id',
			'id'
		);
	}

	function catN4_Name()
	{
		return $this->catN4->nombre;
	}

	function catN3_Name()
	{
		return $this->catN4->catN3_Name();
	}

	function catN2_Name()
	{
		return $this->catN4->catN2_Name();
	}

	function catN1_Name()
	{
		return $this->catN4->catN1_Name();
	}
}
