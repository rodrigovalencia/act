@extends('layouts.app')

@section('titulo', 'Index SATI')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Importar archivo CSV SATI's</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="{{ route('csv.sati.guardarSati') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('archivoCSV') ? ' has-error' : '' }}">
						<label for="archivoCSV" class="col-md-4 control-label">Archivo CSV</label>
						<div class="col-md-6">
							<input id="archivoCSV" type="file" class="form-control" name="archivoCSV" required>
							@if ($errors->has('archivoCSV'))
								<span class="help-block">
									<strong>{{ $errors->first('archivoCSV') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-4">
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