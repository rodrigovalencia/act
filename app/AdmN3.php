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

	function admN4()
	{
		return $this->hasMany(
			AdmN4::class,
			'AdmN3_id',
			'id'
		);		
	}

	function admN2()
	{
		return $this->belongsTo(
			AdmN2::class,
			'AdmN2_id',
			'id'
		);
	}
}
