@extends('layouts.app')

@section('titulo', 'Reportes')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Exportacion de Reportes</strong></h3>
	</div>
	<hr>
	<div class="row">
		<div class="d-flex flex-row justify-content-center col-md-6 col-md-offset-3">
			<table class="table table-inverse col-md-2">
				<thead>
					<tr>
						<th>Nombre Reporte</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Usuarios Asignados</th>
						<th>
							<a class="btn btn-sm btn-round btn-info" href="{{ route('reporte.uAsig.CSV') }}">CSV</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-info" href="{{ route('reporte.uAsig.XLSX') }}">XLSX</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-danger" href="{{ route('reporte.uAsig.PDF') }}">PDF</a>
						</th>
					</tr>
					<tr>
						<th>Vehículos Asignados</th>
						<th>
							<a class="btn btn-sm btn-round btn-info" href="{{ route('reporte.vAsig.CSV') }}">CSV</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-info" href="{{ route('reporte.vAsig.XLSX') }}">XLSX</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-danger" href="{{ route('reporte.vAsig.PDF') }}">PDF</a>
						</th>
					</tr>
					<tr>
						<th>Terminales</th>
						<th>
							<a class="btn btn-sm btn-round btn-danger" href="{{ route('reporte.uAsig.CSV') }}">CSV</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-danger" href="{{ route('reporte.uAsig.XLSX') }}">XLSX</a>
						</th>
						<th>
							<a class="btn btn-sm btn-round btn-danger" href="{{ route('reporte.uAsig.PDF') }}">PDF</a>
						</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="d-flex flex-row justify-content-center col-md-6 col-md-offset-3">
			<table class="table table-inverse col-md-2">
				<thead>
					<tr>
						<th>Nombre Reporte</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Tickets</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
					<tr>
						<th>Carros de Amplificación</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
					<tr>
						<th>Cables Radiantes</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
					<tr>
						<th>Repuestos</th>
						<th>CSV</th>
						<th>XLSX</th>
						<th>PDF</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection