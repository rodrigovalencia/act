@extends('layouts.app')

@section('titulo', ' Crear Ticket')

@push('estilos')
<style>
	.espacio{
		height: 50px;
	}
</style>
@endpush

@push('acciones')

	<script>
		$('#selFaena').on('change', function(e){
			var Faena_id = e.target.value;

			url = '{{ route("ajax.faena.ubicaciones", ":id") }}';
			url = url.replace(':id', Faena_id);

			$.get(url, function(data) {
					$('#selUbicacion').empty();
					$('#selUbicacion').append('<option value="0" selected="true">** Seleccione una Ubicación **</option>');
					$.each(data, function(index, ubicacion){
						$('#selUbicacion').append('<option value="'+ ubicacion['id'] +'">'+ ubicacion['nombre'] +'</option>');
					})
				});

		});

		$('#selUbicacion').on('change', function(e){
			var Ubicacion_id = e.target.value;

			url = '{{ route("ajax.faena.areas", ":id") }}';
			url = url.replace(':id', Ubicacion_id);

			$.get(url, function(data) {
					$('#selArea').empty();
					$('#selArea').append('<option value="0" selected="true">** Seleccione un Área **</option>');
					$.each(data, function(index, area){
						$('#selArea').append('<option value="'+ area['id'] +'">'+ area['nombre'] +'</option>');
					})
				});

		});
	</script>
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Creación de Ticket</strong></h3>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<label class="control-label col-md-5 col-xs-12">Fecha Creación</label>
			<div class="col-md-7 col-xs-12">
				<input type="text" class="form-control text-center" value="{{ date('d-m-Y') }}" readonly="readonly">
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="d-flex flex-row justify-content-center">
			<h5 class="text-center">Datos Administrativos</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Tipo Ticket</label>
				<div class="col-md-9 col-xs-12">
					<select id="tipoTicket" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">* Seleccione Tipo de Ticket *</option>
						<option value="1">Telefónico</option>
						<option value="2">Terreno</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Categoría</label>
				<div class="col-md-9 col-xs-12">
					<select id="catTicket" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione una Categoria **</option>
							@foreach ($categorias as $categoria)
								<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
							@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">SubCategoría</label>
				<div class="col-md-9 col-xs-12">
					<select id="subcatTicket" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione una SubCategoria **</option>
						@foreach ($categorias as $categoria)
							<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Faena</label>
				<div class="col-md-9 col-xs-12">
					<select id="selFaena" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione una Faena **</option>
						@foreach ($faenas as $faena)
							<option value="{{ $faena->id }}">{{ $faena->nombre }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Ubicación</label>
				<div class="col-md-9 col-xs-12">
					<select id="selUbicacion" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione una Ubicación **</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Área</label>
				<div class="col-md-9 col-xs-12">
					<select id="selArea" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione un Área **</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Solicitante</label>
				<div class="col-md-9 col-xs-12">
					<input class="form-control" title="Ingrese Apellido Paterno, Apellido Materno y Primer Nombre" id="txtNombre" name="txtNombre" required>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Teléfono</label>
				<div class="col-md-9 col-xs-12">
					<input class="form-control" title="Ingrese N° Telefónico" id="txtTelefono" name="txtTelefono" required>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label col-md-3 col-xs-12">Empresa</label>
				<div class="col-md-9 col-xs-12">
					<select id="selEmpresa" class="select2_single form-control" tabindex="-1">
						<option value="0" disable="true" selected="true">** Seleccione una Empresa **</option>
						@foreach ($empresas as $empresa)
							<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="d-flex flex-row justify-content-center">
			<h5 class="text-center">Datos de Activos</h5>
		</div>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<div class="col-md-4">
			<div class="row">
				<div class="form-group">
					<label class="control-label col-md-4 col-xs-12">Tipo de Activo</label>
					<div class="col-md-8 col-xs-12">
						<select id="selFaena" class="select2_single form-control" tabindex="-1">
							<option value="0" disable="true" selected="true">** Seleccione un tipo de Activo **</option>
							@foreach ($tipoactivos as $tipoactivo)
								<option value="{{ $tipoactivo->id }}">{{ $tipoactivo->nombre }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="control-label col-md-4 col-xs-12">Nº de Serie</label>
					<div class="col-md-8 col-xs-12">
						<input class="form-control" title="Ingrese N° d Serie" id="nSerie" name="nSerie" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<button class="btn btn-block btn-primary">Agregar</button>
				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-3">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>Serie</th>
						<th>Empresa</th>
						<th>Formulario Asignacion</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Serie1</td>
						<td>Empresa1</td>
						<td>Formulario1</td>
						<td><button class="btn btn-danger"> - </button> </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<label class="control-label">Observaciones</label>
			</div>
			<div class="row">
				<textarea class="form-control" id="txtObservaciones" rows="5"></textarea>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2 col-md-offset-3">
			<button class="btn btn-block btn-primary">Imprimir</button>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<button class="btn btn-block btn-primary">Validar Ticket</button>
		</div>
	</div>
<div class="espacio"></div>
</div>
@endsection