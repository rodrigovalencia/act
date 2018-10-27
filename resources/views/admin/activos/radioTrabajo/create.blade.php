@extends('layouts.app')

@section('titulo', 'Crear Radio Trabajo')

@push('estilos')
<!-- Switchery -->
<link href="/components/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- Estilos Personales -->
<link href="/css/custom2.css" rel="stylesheet">
@endpush

@push('acciones')
<!-- jquery.inputmask -->
<script src="/components/jquery.inputmask4/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- Switchery -->
<script src="/components/switchery/dist/switchery.min.js"></script>
<!-- Scritp Personal -->
<script src="/js/custom.js"></script>

<script>
	$('#marca').on('change', function(e){
		var id = e.target.value;
		if (id==0) {
			$('#modelo').attr({'disabled': 'disabled'});
			$('#sistema').attr({'disabled': 'disabled'});
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			$('#modelo').empty();
			$('#modelo').append('<option value="0" selected>- Seleccione una Marca -</option>');
			$('#sistema').empty();
			$('#sistema').append('<option value="0" selected>- Seleccione una Marca -</option>');
			$('#serie').value = '';
			$('#flashPort').value = '';
			$('#idSistema').value = '';
		} else {
			$('#modelo').removeAttr('disabled');
			$('#sistema').attr({'disabled': 'disabled'});
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			var url = '{{ route("ajax.radioTrabajo.modelos", ":id") }}';
			url = url.replace(':id', id);

			$.get(url, function(data) {
				$('#modelo').empty();
				$('#modelo').append('<option value="0" selected>- Seleccione un Modelo -</option>');
				$.each(data, function(index, modelo){
					$('#modelo').append('<option value="'+ index +'">'+ modelo +'</option>');
				});
				$('#serie').empty();
				$('#serie').append('<option value="0" selected>- Seleccione un Modelo -</option>');
			});
		}
	});

	$('#modelo').on('change', function(e){
		var id = e.target.value;
		if (id==0) {
			$('#sistema').attr({'disabled': 'disabled'});
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			$('#sistema').empty();
			$('#sistema').append('<option value="0" selected>- Seleccione un Modelo -</option>');
			$('#serie').value = '';
			$('#flashPort').value = '';
			$('#idSistema').value = '';
		} else {
			$('#sistema').removeAttr('disabled');
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			var url = '{{ route("ajax.radioTrabajo.sistemas", ":id") }}';
			url = url.replace(':id', id);

			$.get(url, function(data) {
				$('#sistema').empty();
				$('#sistema').append('<option value="0" selected>- Seleccione un Sistema -</option>');
				$.each(data, function(index, modelo){
					$('#sistema').append('<option value="'+ index +'">'+ modelo +'</option>');
				});
			});
		}
	});


	var empresa = document.getElementById("empresa");
	var nContrato = document.getElementById("nContrato");

	var responsable = document.getElementById("responsable");
	var tercero = document.getElementById("tercero");
	var cecoGrafo = document.getElementById("cecoGrafo");
	var comodato = document.getElementById("comodato");

	var ubicacion = document.getElementById("ubicacion");
	var area = document.getElementById("area");

	var uRadio = document.getElementById("URadio_id");
	var lugarInstalacion = document.getElementById("lugarInstalacion");


	$('#ubicaciones').on('change', function(e){
		var Ubicacion_id = e.target.value;

		var url = '{{ route("ajax.radioTrabajo.areas", ":id") }}';
		url = url.replace(':id', Ubicacion_id);

		$.get(url, function(data) {
			$('#areas').empty();
			$('#areas').append('<option value="0" disable selected>*** Seleccione un Area ***</option>');

			$.each(data, function(index, modelo){
				$('#areas').append('<option value="'+ modelo['id'] +'">'+ modelo['nombre'] +'</option>');
			})
		});
	});
	$(":input").inputmask();










	var satis = @json($satis);

	autocomplete(document.getElementById("responsable"), satis);
	autocomplete(document.getElementById("tercero"), satis);
</script>
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="row">
		<h3 class="text-center"><strong>Administración de Activos</strong></h3>
		<h5 class="text-center"><strong>Radios de Trabajo</strong></h5>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label col-md-2 col-xs-12">Fecha de Creación</label>
				<div class="col-md-4 col-xs-12">
					<input type="text" class="form-control text-center" value="{{ date('d-m-Y') }}" readonly="readonly">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label col-md-2 col-xs-12">Formulario de Asignación</label>
				<div class="col-md-4 col-md-offset-1 col-xs-12">
					<input type="file" title="Seleccione archivo" id="formulario" name="formulario" required>
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
						<label class="control-label col-md-3 col-xs-12">Marca</label>
						<div class="col-md-9 col-xs-12">
							<select id="marca" name="marca_test" class="select2_single form-control">
								<option value="0">- Seleccione una Marca -</option>
								@foreach ($fabricantes as $fabricante)
									<option value="{{ $fabricante->id }}">{{ $fabricante->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Modelo</label>
						<div class="col-md-9 col-xs-12">
							<select id="modelo" name="ModeloRadio_id" class="select2_single form-control" disabled>
								<option value="0">- Seleccione una Marca -</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Sistema</label>
						<div class="col-md-9 col-xs-12">
							<select id="sistema" name="Sistema_id" class="select2_single form-control" disabled>
								<option value="0">- Seleccione una Marca -</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Nº Serie</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="serie"
								name="serie"
								type="text"
								class="form-control"
								placeholder="Numero de Serie"
								disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Flash Port</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="flashPort"
								name="flashPort"
								type="text"
								class="form-control"
								placeholder="Flash Port"
								disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Id Sistema</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="idSistema"
								name="idSistema"
								type="text"
								class="form-control"
								placeholder="Id Sistema"
								disabled>
						</div>
					</div>
				</div>
			</div>
			<hr>

			<div class="row">
				<h5>Datos de Administración</h5>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Empresa</label>
						<div class="col-md-9 col-xs-12">
							<select id="empresa" name="Empresa_id" class="select2_single form-control">
								<option>- Seleccione una Empresa -</option>
								@foreach ($empresas as $empresa)
									<option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Nº Contrato</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="nContrato"
								name="nContrato"
								type="text"
								class="form-control"
								placeholder="Numero de Contrato"
								disabled>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Responsable</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="responsable"
								name="mandante"
								type="text"
								class="form-control"
								placeholder="Responsable"
								disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Tercero</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="tercero"
								name="tercero"
								type="text"
								class="form-control"
								placeholder="Tercero"
								disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Centro de Costos</label>
						<div class="col-md-9 col-xs-12">
							<input
								id="cecoGrafo"
								name="cecoGrafo"
								type="text"
								class="form-control"
								placeholder="CECO / GRAFO"
								disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Comodato</label>
						<div class="col-md-9 col-xs-12">
							<label>
								<input
									id="comodato"
									name="comodato"
									type="checkbox"
									class="js-switch"
									placeholder="Comodato"
									disabled>
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
						<label class="control-label col-md-3 col-xs-12">Ubicacion</label>
						<div class="col-md-9 col-xs-12">
							<select id="ubicacion" name="Ubicacion_id" class="select2_single form-control">
								<option value="0">- Seleccione una Ubicación -</option>
								@foreach ($ubicaciones as $ubicacion)
									<option value="{{ $ubicacion['id'] }}">{{ $ubicacion['nombre'] }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Area</label>
						<div class="col-md-9 col-xs-12">
							<select id="area" name="Area_id" class="select2_single form-control" disabled>
								<option value="0">- Seleccione una Ubicación -</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Lugar Instalación</label>
						<div class="col-md-9 col-xs-12">
							<input hidden type="text" id="URadio_id" name="URadio_id">
							<input id="lugarInstalacion" type="text" class="form-control" placeholder="- Definir lugar de instalación -" disabled>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2">
						<button type="button" class="btn btn-block btn-success btn-round" data-toggle="modal" data-target=".modalOficina">Oficina</button>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-block btn-success btn-round" data-toggle="modal" data-target=".modalVehiculo">Vehiculo</button>
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