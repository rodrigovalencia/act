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

	function administrativo()
	{
		return $this->hasMany(
			AdmN4::class,
			'AdmN4_id',
			'id'
		);		
	}

	function admN3()
	{
		return $this->belongsTo(
			AdmN3::class,
			'AdmN3_id',
			'id'
		);
	}
}
