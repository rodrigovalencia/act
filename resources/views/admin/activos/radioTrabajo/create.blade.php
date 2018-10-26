@extends('layouts.app')

@section('titulo', ' Crear Radio Trabajo')

@push('estilos')
	<!-- Switchery -->
	<link href="/components/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- Estilos Personales -->
	<link href="/css/custom2.css" rel="stylesheet">
@endpush

@push('acciones')
	{{-- QUE ONDA ACA...?? --}}
	<!-- jquery.inputmask -->
	<script src="/components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
	<!-- Switchery -->
	<script src="/components/switchery/dist/switchery.min.js"></script>
	<!-- Scritp Personal -->
	<script src="/js/custom.js"></script>
	<script>
		$('#marcaRadio').on('change', function(e){
			var Fabricante_id = e.target.value;

			var url = '{{ route("ajax.radioTrabajo.modelos", ":id") }}';
			url = url.replace(':id', Fabricante_id);

			$.get(url, function(data) {
				$('#modeloRadio').empty();
				$('#modeloRadio').append('<option value="0" disable="true" selected="true">*** Seleccione un Modelo ***</option>');

				$.each(data, function(index, modelo){
					$('#modeloRadio').append('<option value="'+ index +'">'+ modelo +'</option>');
				})
			});
		});

		$('#modeloRadio').on('change', function(e){
			var ModeloRadio_id = e.target.value;

			var url = '{{ route("ajax.radioTrabajo.sistema", ":id") }}';
			url = url.replace(':id', ModeloRadio_id);

			$.get(url, function(data) {
				// $('#sistema').value = data['nombre'];
				document.getElementById("sistema").value = data['nombre'];
			});

		});

		var satis = @json($satis);

		autocomplete(document.getElementById("responsable"), satis);
		autocomplete(document.getElementById("tercero"), satis);

		$('#ubicaciones').on('change', function(e){
			var Ubicacion_id = e.target.value;

			var url = '{{ route("ajax.radioTrabajo.areas", ":id") }}';
			url = url.replace(':id', Ubicacion_id);

			$.get(url, function(data) {
				$('#areas').empty();
				$('#areas').append('<option value="0" disable="true" selected="true">*** Seleccione un Area ***</option>');

				$.each(data, function(index, modelo){
					$('#areas').append('<option value="'+ modelo['id'] +'">'+ modelo['nombre'] +'</option>');
				})
			});
		});
		$(":input").inputmask();
	</script>
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Administración de Activos</strong></h3>
		<h5 class="text-center"><strong>Radios de Trabajo</strong></h5>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label col-md-2 col-sm-2 col-xs-12">Fecha de Creación</label>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<input type="text" class="form-control text-center" value="{{ date('d-m-Y') }}" readonly="readonly">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label col-md-2 col-sm-2 col-xs-12">Formulario de Asignación</label>
				<div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-3 col-xs-12">
					<input type="file" title="Seleccione archivo" id="archivoCSV" name="archivoCSV" accept=".csv" required>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<div class="row">
		<h4><strong>Carga Individual</strong></h4>
		
		<form method="POST" action="{{ route('admin.activos.radioTrabajo.store') }}" class="form-horizontal form-label-left">
			@csrf
			<div class="row">
				<h5>Datos de la Radio</h5>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select id="marcaRadio" class="select2_single form-control" tabindex="-1">
								<option value="0" disable="true" selected="true">*** Seleccione una Marca ***</option>
								@foreach ($fabricantes as $fabricante)
									<option value="{{ $fabricante->id }}">{{ $fabricante->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select id="modeloRadio" name="ModeloRadio_id" class="select2_single form-control" tabindex="-1">
								<option value="0" disable="true" selected="true">*** Seleccione una Marca ***</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistema</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select id="sistema" name="Sistema_id" class="select2_single form-control" tabindex="-1">
								<option value="0" disable="true" selected="true">*** Seleccione una Marca ***</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nº Serie</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input name="serie" type="text" class="form-control" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Flash Port</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input name="flashPort" type="text" class="form-control" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Id Sistema</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input name="idSistema" type="text" class="form-control" placeholder="Default Input">
						</div>
					</div>
				</div>
			</div>
			<hr>

			<div class="row">
				<h5>Datos de Administración</h5>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Empresa</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select class="select2_single form-control" tabindex="-1">
								<option>Seleccione una opcion</option>
								@foreach ($empresas as $empresa)
								<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nº Contrato</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" data-inputmask="'mask': '9999999999'" placeholder="Numero contrato">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Responsable</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="mandante" id="responsable" placeholder="Default Input">
						</div>
						<div id="responsableList"></div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Tercero</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="tercero" id="tercero" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Centro de Costos</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="cecoGrafo" id="tercero" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Comodato</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<label>
                              <input type="checkbox" class="js-switch" />
                            </label>
						</div>
					</div>
				</div>
			</div>
			<hr>

			<div class="row">
				<h5>Datos de Ubicacion</h5>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Ubicacion</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select id="ubicaciones" class="select2_single form-control" tabindex="-1">
								<option value="0" disable="true" selected="true">*** Seleccione una Ubicacion ***</option>
								@foreach ($ubicaciones as $ubicacion)
								<option value="{{ $ubicacion['id'] }}">{{ $ubicacion['nombre'] }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Area</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<select id="areas" name="Area_id" class="select2_single form-control" tabindex="-1">
								<option value="0" disable="true" selected="true">*** Seleccione una Ubicacion ***</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Lugar Instalación</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" hidden="true" id="URadio_id" name="URadio_id" value="">
							<input id="lugarInstalacion" type="text" class="form-control" placeholder="*** Definir lugar de instalación ***" disabled>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2">
						<button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modalOficina">Oficina</button>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modalVehiculo">Vehiculo</button>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-3">
			<button class="btn btn-block btn-success">Aceptar</button>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<a class="btn btn-block btn-danger" href="{{ route('dashboard.index') }}">Cancelar</a>
		</div>
	</div>
</form>

@include('admin.activos.radioTrabajo.partials.oficina')
@include('admin.activos.radioTrabajo.partials.vehiculo')

@endsection