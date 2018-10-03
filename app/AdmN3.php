<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmN3 extends Model
{
	protected $table = 'AdmN3';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('AdmN2_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			AdmN2::class,
			'AdmN2_id',
			'id'
		);
	}
}
