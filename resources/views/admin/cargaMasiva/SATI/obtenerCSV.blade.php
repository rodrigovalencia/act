@extends('layouts.app')

@section('titulo', 'Importar SATI')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Importar archivo CSV SATI's</strong></h3>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" method="POST" action="{{ route('carga.sati.guardarSati') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('archivoCSV') ? ' has-error' : '' }}">
					<label for="archivoCSV" class="col-md-2 control-label">Archivo CSV</label>
					<div class="col-md-8">
						<input id="archivoCSV" type="file" class="form-control" name="archivoCSV" required>
						@if ($errors->has('archivoCSV'))
							<span class="help-block">
								<strong>{{ $errors->first('archivoCSV') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8 col-md-offset-2">
						<button type="submit" class="btn btn-primary">
							Trabajar Archivo
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection