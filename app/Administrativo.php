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

	function CategoriaTicket()
	{
		return $this->hasMany(
			CategoriaTicket::class,
			'Categoria_id',
			'id'
		);		
	}

	function AdmN4()
	{
		return $this->belongsTo(
			AdmN4::class,
			'AdmN4',
			'id'
		);
	}

	function CatTicket()
	{
		return $this->morphMany('CategoriaTicket','Categoria');
	}
}
