<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
	protected $table = 'Administrativo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('AdmN4_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			AdmN4::class,
			'AdmN4_id',
			'id'
		);
	}

	function catTicket()
	{
		return $this->morphMany(CategoriaTicket::class,'categoria');
	}
}
