<?php

namespace App\Http\Controllers\ticket;

use App\Area;
use App\CategoriaTicket;
use App\Empresa;
use App\Faena;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\TipoActivo;
use App\Ubicacion;
use Illuminate\Http\Request;

class TicketController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		/* 

		como traigo el tipo de activo de cada ticket?????


		*/
		$tickets = Ticket::all();
		$datos = array();
		foreach ($tickets as $ticket) {
			$datos[] = array("categoria"=> $ticket->first()->catTicket->getNombre(), "creador"=>$ticket->first()->servicios->usuarios->nombre . ' ' . $ticket->first()->servicios->usuarios->apPaterno . ' ' . $ticket->first()->servicios->usuarios->apMaterno, "area"=>$ticket->first()->area->nombre);
		}
		$tipoActivos = TipoActivo::all();
		return view('ticket.index', compact('datos','tipoActivos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$categorias = CategoriaTicket::all()->pluck('categoria_type')->unique();
		$faenas = Faena::all();
		$empresas = Empresa::all();
		$tipoActivos = TipoActivo::all();
		return view('ticket.create', compact('categorias','faenas','empresas','tipoActivos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		dd($request->all);
		return 'paso por el store';
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
