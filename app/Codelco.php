<?php

namespace App;

use App\CategoriaTicket;
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

	function getNombre(){
		return ($this->nombre == "NULL") ? $this->hijo->nombre : $this->nombre . ' - ' . $this->hijo->nombre;
	}

	function hijo()
	{
		return $this->belongsTo(
			CatCodelco::class,
			'CatCodelco_id',
			'id'
		);
	}

	function catTicket()
	{
		return $this->morphMany(CategoriaTicket::class,'categoria');
	}
}
