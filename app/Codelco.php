<?php

namespace App;

use App\CatCodelco;
use Illuminate\Database\Eloquent\Model;

class Codelco extends Model
{
	protected $table = 'Codelco';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		// 'CatCodelco_id',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatCodelco_id')
	*/

	function CatCodelco()
	{
		return $this->belongsTo(
			CatCodelco::class,
			'CatCodelco_id',
			'id'
		);
	}

	function CatTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}
}
