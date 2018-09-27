<?php

namespace App;

use App\InstSW;
use App\Licencia;
use App\ModeloSW;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
	protected $table = 'Administrativo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
	];

	/*
	* Atributos 
	*
	* increments('id')
	* string('nombre')
	* unsignedInteger('AdmN4_id')
	*/

	function categoriaTicket()
	{
		return $this->hasMany(
			CategoriaTicket::class,
			'Categoria_id',
			'id'
		);		
	}

	function admN4()
	{
		return $this->belongsTo(
			AdmN4::class,
			'AdmN4_id',
			'id'
		);
	}

	function catTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}
}
