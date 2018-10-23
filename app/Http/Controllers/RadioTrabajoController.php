<?php

namespace App\Http\Controllers;

use App\CatEquipo;
use App\Empresa;
use App\SATI;
use App\TipoActivo;
use App\TipoBase;
use App\Ubicacion;
use Illuminate\Http\Request;

class RadioTrabajoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	    
		$fabricantes = TipoActivo::where('nombre', 'RadioTrabajo')->first()->fabricantes;
		$empresas = Empresa::all();
		$satis = SATI::all()->map(function($s){
			return $s->getNombreCompleto();
		});
		$ubicaciones = Ubicacion::all()->map(function($u){
			return [
				'id' => $u->id,
				'nombre' => $u->getNombre()
			];
		});
		$tiposBase = TipoBase::all();
		$catEquipos = CatEquipo::All();
		return view('admin.activos.radioTrabajo.create', compact('fabricantes', 'empresas', 'satis', 'ubicaciones', 'tiposBase', 'catEquipos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		/*
		 * Atributos RadioTrabajo
		 *
		 * increments('id')
		 * string('serie')
		 * string('idSistema')
		 * string('flashPort')->nullable()
		 * string('centroCostos')
		 * boolean('comodato')
		 * unsignedInteger('ModeloRadio_id')
		 * unsignedInteger('Area_id')
		 * unsignedInteger('Contrato_id')
		 * unsignedInteger('Mandante_id')
		 * unsignedInteger('Tercero_id')->nullable()
		 * unsignedInteger('URadio_id')->nullable()
		 */

		return $request;
		return 'soy simple';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
