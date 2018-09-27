<?php

namespace App;

use App\Codelco;
use Illuminate\Database\Eloquent\Model;

class CatCodelco extends Model
{
	protected $table = 'CatCodelco';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	*/

	function codelco()
	{
		return $this->hasMany(
			Codelco::class,
			'CatCodelco_id',
			'id'
		);
	}
}
