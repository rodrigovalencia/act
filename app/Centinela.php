<?php

namespace App;

use App\CategoriaTicket;
use Illuminate\Database\Eloquent\Model;

class Centinela extends Model
{
	protected $table = 'Centinela';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('CatN5_id')
	*/

	function getNombre(){
		return $this->nombre . ' - ' . $this->hijo->getNombre();
	}

	function hijo()
	{
		return $this->belongsTo(
			CatN5::class,
			'CatN5_id',
			'id'
		);
	}
	
	function catTicket()
	{
		return $this->morphMany(CategoriaTicket::class,'categoria');
	}
}
