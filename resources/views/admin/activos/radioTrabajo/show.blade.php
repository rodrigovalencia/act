@extends('layouts.app')

@section('titulo', 'Radios de Trabajo')

@push('estilos')
	<style>
		.sw{
			background-color: red;
		}
		.espacio{
			height: 50px;
		}
		.ventana{ 
			width: 100%;
			height: 500px;
			border: 1px solid #484848;
			margin: 0 auto; 
		}
		.subTitulo{
			font-size: 18px;
			margin: 10px 0px;
			font-weight: 500;
		}
		th{
			font-weight: 350;
		}
		.ancho{
			width: 100%;
		}
		.tabla1{
			width: 30%;
		}
		.tabla2{
			width: 70%;
		}
		.contenido{
			padding-right: 5%;
		}
		.espDer{
			margin-bottom: 0px;
			margin-right: 10px;
		}
		.botones{
			margin-top: 20px;
		}
	</style>
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="row">
		<h3 class="text-center"><strong>Radio de Trabajo ID: {{ $radio->id }}</strong></h3>
		<h4 class="text-center"><strong>Detalle de configuración</strong></h4>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6 contenido">
			<div class="row">
				<hr>
				<div class="subTitulo">Datos de la Radio</div>
				<div class="col-md-offset-1">
					<table class="ancho">
						<thead>
							<tr>
								<th class="tabla1"></th>
								<th class="tabla2"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Marca</th>
								<th>{{ $radio->modeloRadio->fabricante->nombre }}</th>
							</tr>
							<tr>
								<th>Modelo</th>
								<th>{{ $radio->modeloRadio->nombre }}</th>
							</tr>
							<tr>
								<th>Nº de Serie</th>
								<th>{{ $radio->serie }}</th>
							</tr>
							<tr>
								<th>Flash Port</th>
								<th>{{ $radio->flashPort }}</th>
							</tr>
							<tr>
								<th>Sistema</th>
								<th>{{ $radio->modeloRadio->sistemas->pluck('nombre')->implode(', ') }}</th>
							</tr>
							<tr>
								<th>ID Sistema</th>
								<th>{{ $radio->idSistema }}</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="subTitulo">Datos de la Radio</div>
				<div class="col-md-offset-1">
					<table class="ancho">
						<thead>
							<tr>
								<th class="tabla1"></th>
								<th class="tabla2"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Marca</th>
								<th>{{ $radio->modeloRadio->fabricante->nombre }}</th>
							</tr>
							<tr>
								<th>Modelo</th>
								<th>{{ $radio->modeloRadio->nombre }}</th>
							</tr>
							<tr>
								<th>Nº de Serie</th>
								<th>{{ $radio->serie }}</th>
							</tr>
							<tr>
								<th>Flash Port</th>
								<th>{{ $radio->flashPort }}</th>
							</tr>
							<tr>
								<th>Sistema</th>
								<th>{{ $radio->modeloRadio->sistemas->pluck('nombre')->implode(', ') }}</th>
							</tr>
							<tr>
								<th>ID Sistema</th>
								<th>{{ $radio->idSistema }}</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="subTitulo">Datos de Administracion</div>
				<div class="col-md-offset-1">
					<table class="ancho">
						<thead>
							<tr>
								<th class="tabla1"></th>
								<th class="tabla2"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Empresa</th>
								<th>{{ $radio->contrato->empresa->nombre }}</th>
							</tr>
							<tr>
								<th>Nº de Contrato</th>
								<th>{{ $radio->contrato->numero }}</th>
							</tr>
							<tr>
								<th>Responsable</th>
								<th>{{ $radio->mandante->getNombreCompleto() }}</th>
							</tr>
							<tr>
								<th>Tercero</th>
								<th>{{ (isset($radio->Tercero_id)) ? $radio->tercero->getNombreCompleto() : 'No posee' }}</th>
							</tr>
							<tr>
								<th>Centro de Costos</th>
								<th>{{ $radio->centroCostos }}</th>
							</tr>
							<tr>
								<th>Comodato</th>
								<th>NO</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<hr>
				<div class="subTitulo">Datos de Ubicacion</div>
				<div class="col-md-offset-1">
					<table class="ancho">
						<thead>
							<tr>
								<th class="tabla1"></th>
								<th class="tabla2"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Ubicacion</th>
								<th>{{ $radio->area->ubicacion->nombre }}</th>
							</tr>
							<tr>
								<th>Area</th>
								<th>{{ $radio->area->nombre }}</th>
							</tr>
							<tr>
								<th>Lugar de Instalacion</th>
								<th>{{ (isset($radio->URadio_id)) ? $radio->ubicacionRadio->getNombre() : 'No aplica' }}</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">

			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<p>Fecha de Creacion</p>
				</div>
				<div class="col-md-5">
					<strong>{{ now() }}</strong>
				</div>
			</div>
			<div class="row">
				<div class="subTitulo text-center"><strong>Formulario de Asignacion</strong></div>
				<div class="ventana">
					<object data="{{ Storage::url('documentos/Ticket/FormAsignacion/aux.pdf') }}" type="application/pdf" width="100%" height="100%"></object> 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 align-items-center botones">
					<a href="{{ route('admin.activos.radioTrabajo.index') }}"
						class="btn btn-md btn-round btn-success espDer">
							Volver
					</a>
					<div class="btn-group">
						<a href="{{ route('admin.activos.radioTrabajo.show', $radio->id) }}"
							class="btn btn-md btn-round btn-primary">
								Reporte
						</a>
						<a href="{{ route('admin.activos.radioTrabajo.edit', $radio->id) }}"
							class="btn btn-md btn-round btn-warning">
								Modificar
						</a>
						<a href="{{ route('admin.activos.radioTrabajo.destroy', $radio->id) }}"
							class="btn btn-md btn-round btn-danger">
								Eliminar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="espacio"></div>
</div>
@endsection