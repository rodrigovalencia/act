<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmN4 extends Model
{
	protected $table = 'AdmN4';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('AdmN3_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			AdmN3::class,
			'AdmN3_id',
			'id'
		);
	}
}
