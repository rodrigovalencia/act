@extends('layouts.app')

@section('titulo', ' Tipos de Bases de Equipos')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Tipos de Bases de Radio</strong></h3>
	</div>
	<hr>
	<div class="row">
		<div class="d-flex flex-row justify-content-center col-md-6 col-md-offset-3">
			<table class="table table-inverse col-md-2">
				<thead>
					<tr>
						<th>Nombre de Tipo de Base</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tipos as $tipo)
						<tr>
							<td>{{ $tipo->nombre }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
