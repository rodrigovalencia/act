<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmN2 extends Model
{
	protected $table = 'AdmN2';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('AdmN1_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->nombre;
	}

	function hijo()
	{
		return $this->belongsTo(
			AdmN1::class,
			'AdmN1_id',
			'id'
		);
	}
}
