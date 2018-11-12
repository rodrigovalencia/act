<?php

namespace App\Http\Controllers\ticket;

use App\Area;
use App\CategoriaTicket;
use App\Contacto;
use App\Empresa;
use App\EstadoTicket;
use App\Faena;
use App\Http\Controllers\Controller;
use App\MesaAyuda;
use App\MesaAyuda_Activo;
use App\Servicio;
use App\Servicio_Usuario;
use App\Ticket;
use App\Ticket_EstadoTicket;
use App\TipoActivo;
use App\Ubicacion;
use App\Usuario;
use Carbon\Carbon;
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
		$datos = $request->except('nSerie','catTicket');

		$solicitante = explode(" ", $datos['txtNombre']);
		$existe = Contacto::where('nombre', $solicitante[2])->where('apPaterno', $solicitante[0])->where('apMaterno', $solicitante[1])->exists();
		if($existe){
			$contacto = Contacto::where('nombre', $solicitante[2])->where('apPaterno', $solicitante[0])->where('apMaterno', $solicitante[1])->first();
			// dd($contacto);
		}else{
			$contacto = new Contacto;
			$contacto->nombre = $solicitante[2];
			$contacto->apPaterno = $solicitante[0];
			$contacto->apMaterno = $solicitante[1];
			$contacto->fono = $datos['txtTelefono'];
			$contacto->fecha = Carbon::parse(now())->format('Y/m/d');
			$contacto->save();
		}

		$ticket = new Ticket;
		$ticket->finicio = Carbon::parse(now())->format('Y/m/d');
		$ticket->fcompromiso = Carbon::parse(now())->addDays(10)->format('Y/m/d');
		$ticket->CategoriaTicket_id = $datos['CategoriaTicket_id'];
		$ticket->Solicita_id = $contacto->id;
		$ticket->Ubicacion_id = $datos['Area_id'];
		$ticket->observaciones = $request->get('observaciones');
		$ticket->save();

		$estadoTicket = EstadoTicket::where('nombre','Creado')->first();
		$usuario = Usuario::where('nombre', 'Rita')->first();
		$ticketEstadoTicket = new Ticket_EstadoTicket;
		$ticketEstadoTicket->Ticket_id = $ticket->id;
		$ticketEstadoTicket->EstadoTicket_id = $estadoTicket->id;
		$ticketEstadoTicket->fecha = Carbon::parse(now())->format('Y/m/d');
		$ticketEstadoTicket->Usuario_id = $usuario->id;
		$ticketEstadoTicket->save();

		switch ($request->get('tipoTicket')) {
			case "1":
				$mesaAyuda = MesaAyuda::create();
				$activos = explode(";", $datos['idRadiosHidden']);
				foreach ($activos as $activo){
					$mesaAyudaActivo = MesaAyuda_Activo::create(['MesaAyuda_id'=>$mesaAyuda->id,'Activo_id'=>$activo]);
				}
				$servicio = new Servicio;
				$servicio->Ticket_id = $ticket->id;
				$servicio->Servicio_id = $mesaAyuda->id;
				$servicio->Servicio_type = "MesaAyuda";
				// $servicio->fecha = Carbon::parse(now())->format('Y/m/d');
				$servicio->save();
				// $servicioUsuario = Servicio_Usuario::create(['Servicio_id'=>$servicio->id,'Usuario_id'=>$usuario->id]);
				// dd($mesaAyuda);
			break;
			case "2":

			break;
		}

		return $ticket;
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
