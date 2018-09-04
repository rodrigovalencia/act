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



	function catN5_Name()
	{
		return $this->catN5->nombre;
	}

	function catN4_Name()
	{
		return $this->catN5->catN4_Name();
	}

	function catN3_Name()
	{
		return $this->catN5->catN3_Name();
	}

	function catN2_Name()
	{
		return $this->catN5->catN2_Name();
	}

	function catN1_Name()
	{
		return $this->catN5->catN1_Name();
	}
}
