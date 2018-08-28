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

	function AdmN3()
	{
		return $this->hasMany(
			AdmN3::class,
			'AdmN2_id',
			'id'
		);		
	}

	function AdmN1()
	{
		return $this->belongsTo(
			AdmN1::class,
			'AdmN1',
			'id'
		);
	}
}
