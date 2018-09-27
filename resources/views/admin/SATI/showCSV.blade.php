@extends('layouts.app')

@section('titulo', 'Index SATI')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Importar archivo CSV SATI's</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="{{ route('guardarSati') }}">
					{{ csrf_field() }}
					<table class="table">
						@if (isset($cabeceras))
							<tr>
								@foreach ($cabeceras as $cabecera)
								<th>{{ $cabecera }}</th>
								@endforeach
							</tr>
						@endif
						@foreach ($datos as $fila)
							<tr>
								@foreach ($fila as $key => $valor)
								<td>{{ $valor }}</td>
								@endforeach
							</tr>
						@endforeach
					</table>
					<button type="submit" class="btn btn-primary">
						Importar Informacion
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection
