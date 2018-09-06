@extends('layouts.app')

@section('titulo', 'Index SATI')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="right_col" role="main">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Importar archivo CSV SATI's</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="{{-- route('import_parse') --}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
						<label for="csv_file" class="col-md-4 control-label">Archivo CSV</label>
						<div class="col-md-6">
							<input id="csv_file" type="file" class="form-control" name="csv_file" required>
							@if ($errors->has('csv_file'))
								<span class="help-block">
									<strong>{{ $errors->first('csv_file') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="header" checked> Archivo contiene cabeceras?
								</label>
							</div>
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
</div>
@endsection