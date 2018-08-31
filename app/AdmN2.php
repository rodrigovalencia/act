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

	function admN3()
	{
		return $this->hasMany(
			AdmN3::class,
			'AdmN2_id',
			'id'
		);		
	}

	function admN1()
	{
		return $this->belongsTo(
			AdmN1::class,
			'AdmN1_id',
			'id'
		);
	}
}
