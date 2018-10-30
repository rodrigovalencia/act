@extends('layouts.app')

@section('titulo', 'Crear Radio Trabajo')

@push('estilos')
<!-- Switchery -->
<link href="/components/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- Estilos Personales -->
<link href="/css/custom2.css" rel="stylesheet">
<style>
	.espacio{
		height: 50px;
	}
</style>
@endpush

@push('acciones')
<!-- jquery.inputmask -->
<script src="/components/jquery.inputmask4/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- Switchery -->
<script src="/components/switchery/dist/switchery.min.js"></script>
<!-- Scritp Personal -->
<script src="/js/custom.js"></script>

<script>
	var serie = document.getElementById("serie");
	var flashPort = document.getElementById("flashPort");
	var idSistema = document.getElementById("idSistema");

	$('#marca').on('change', function(e){
		var id = e.target.value;

		serie.value = '';
		flashPort.value = '';
		idSistema.value = '';
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
				$('#sistema').empty();
				if (Object.keys(data).length == 0) {
					$('#modelo').append('<option value="0" selected>- No hay modelos disponibles -</option>');
					$('#sistema').append('<option value="0" selected>- No hay modelos disponibles -</option>');
				} else {
					$('#modelo').append('<option value="0" selected>- Seleccione un Modelo -</option>');
					$.each(data, function(index, valor){
						$('#modelo').append('<option value="'+ index +'">'+ valor +'</option>');
					});
					$('#sistema').append('<option value="0" selected>- Seleccione un Modelo -</option>');
				}
			});
		}
	});

	$('#modelo').on('change', function(e){
		var id = e.target.value;

		serie.value = '';
		flashPort.value = '';
		idSistema.value = '';
		if (id==0) {
			$('#sistema').attr({'disabled': 'disabled'});
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			$('#sistema').empty();
			$('#sistema').append('<option value="0" selected>- Seleccione un Modelo -</option>');
		} else {
			$('#sistema').removeAttr('disabled');
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});

			var url = '{{ route("ajax.radioTrabajo.sistemas", ":id") }}';
			url = url.replace(':id', id);

			$.get(url, function(data) {
				$('#sistema').empty();
				if (Object.keys(data).length == 1) {
					$('#serie').removeAttr('disabled');
					$('#flashPort').removeAttr('disabled');
					$('#idSistema').removeAttr('disabled');
					$('#sistema').append('<option value="' + Object.keys(data)[0] + '" selected>' + data[Object.keys(data)[0]] + '</option>');
					mascarasDatos();
				} else {
					$('#sistema').append('<option value="0" selected>- Seleccione un Sistema -</option>');
					$.each(data, function(index, valor){
						$('#sistema').append('<option value="'+ index +'">'+ valor +'</option>');
					});
				}
			});
		}
	});

	$('#sistema').on('change', function(e){
		var id = e.target.value;

		serie.value = '';
		flashPort.value = '';
		idSistema.value = '';
		if (id==0) {
			$('#serie').attr({'disabled': 'disabled'});
			$('#flashPort').attr({'disabled': 'disabled'});
			$('#idSistema').attr({'disabled': 'disabled'});
		} else {
			$('#serie').removeAttr('disabled');
			$('#flashPort').removeAttr('disabled');
			$('#idSistema').removeAttr('disabled');
			mascarasDatos();
		}
	});

	function mascarasDatos(){
		var id = document.getElementById("sistema").value;
		var url = '{{ route("ajax.radioTrabajo.expReg", ":id") }}';
		url = url.replace(':id', id);

		$.get(url, function(data) {
			$('#serie').inputmask(data.nSerie,{ "clearIncomplete": true });
			if (data.flashPort == null) {
				$('#flashPort').attr({'disabled': 'disabled'});
				$('#flashPort').inputmask('remove');
				flashPort.value = "No aplica";
			} else {
				$('#flashPort').inputmask(data.flashPort,{ "clearIncomplete": true });
			}
			$('#idSistema').inputmask(data.idSistema,{ "clearIncomplete": true });
		});
	}

	var comodato = document.getElementById("comodato");
	var contrato = document.getElementById("nContrato");
	var cecoGrafo = document.getElementById("cecoGrafo");
	var responsable = document.getElementById("responsable");
	var tercero = document.getElementById("tercero");

	$('#empresa').on('change', function(e){
		var id = e.target.value;

		comodato.value = 0;
		contrato.value = '';
		cecoGrafo.value = '';
		responsable.value = '';
		tercero.value = '';
		if (id==0) {
			$('#comodato').attr({'disabled': 'disabled'});
			$('#nContrato').attr({'disabled': 'disabled'});
			$('#cecoGrafo').attr({'disabled': 'disabled'});
			$('#responsable').attr({'disabled': 'disabled'});
			$('#tercero').attr({'disabled': 'disabled'});
		} else {
			$('#comodato').removeAttr('disabled');
			$('#nContrato').removeAttr('disabled');
			$('#cecoGrafo').removeAttr('disabled');
			$('#responsable').removeAttr('disabled');
			$('#tercero').removeAttr('disabled');

			$('#nContrato').inputmask("(9{9}|9{10})");
			$('#cecoGrafo').inputmask("(A{2}9{3}|9{10})");
		}
	});

	$('#ubicacion').on('change', function(e){
		var id = e.target.value;

		reiniciarModales();
		if (id==0) {
			$('#area').empty();
			$('#area').append('<option value="0" selected>- Seleccione una Ubicación -</option>');
			$('#area').attr({'disabled': 'disabled'});
		} else {
			$('#area').removeAttr('disabled');

			var url = '{{ route("ajax.radioTrabajo.areas", ":id") }}';
			url = url.replace(':id', id);
			$.get(url, function(data) {
				$('#area').empty();
				$('#area').append('<option value="0" selected>- Seleccione un Area -</option>');
				$.each(data, function(index, valor){
					$('#area').append('<option value="'+ index +'">'+ valor +'</option>');
				});
			});

			var url = '{{ route("ajax.radioTrabajo.tiposUbicaciones", ":id") }}';
			url = url.replace(':id', id);
			$.get(url, function(data) {
				$.each(data, function(index, valor){
					if (valor == 'Equipo') {
						$('#btnVehiculo').removeAttr('disabled');
						url = '{{ route("ajax.radioTrabajo.categoriasEquipos", ":id") }}';
						url = url.replace(':id', id);
						$.get(url, function(data) {
							$.each(data, function(index, valor){
								$('#catEquipo').append('<option value="'+ index +'">'+ valor +'</option>');
							});
						});
					} else if (valor == 'Base') {
						$('#btnOficina').removeAttr('disabled');
						url = '{{ route("ajax.radioTrabajo.tiposBases", ":id") }}';
						url = url.replace(':id', id);
						$.get(url, function(data) {
							$.each(data, function(index, valor){
								$('#tipoBase').append('<option value="'+ index +'">'+ valor +'</option>');
							});
						});
					}
				});
			});
		}
	});

	function reiniciarModales(){
		$('#btnOficina').attr({'disabled': 'disabled'});
		$('#tipoBase').empty();
		$('#tipoBase').append('<option value="0" selected>- Seleccione un Tipo de Estación -</option>');
		$('#baseBase').empty();
		$('#baseBase').append('<option value="0" selected>- Seleccione un Tipo de Estación -</option>');

		$('#btnVehiculo').attr({'disabled': 'disabled'});
		$('#catEquipo').empty();
		$('#catEquipo').append('<option value="0" selected>- Seleccione una Categoría -</option>');
		$('#tipoEquipo').empty();
		$('#tipoEquipo').append('<option value="0" selected>- Seleccione una Categoría -</option>');
		$('#equipoEquipo').empty();
		$('#equipoEquipo').append('<option value="0" selected>- Seleccione una Categoría -</option>');

		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";
	}

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
		
		<form method="POST" action="{{ route('admin.activos.radioTrabajo.store') }}" class="form-horizontal form-label-left" autocomplete="off">
			@csrf
			<div class="row">
				<h5>Datos de la Radio</h5>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Marca</label>
						<div class="col-md-9 col-xs-12">
							<select id="marca" class="select2_single form-control">
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
								<option value="0">- Seleccione una Empresa -</option>
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
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label col-md-3 col-xs-12">Comodato</label>
						<div class="col-md-9 col-xs-12">
							<select id="comodato" name="comodato" class="select2_single form-control" disabled>
								<option value="0">- Seleccione una Opcion -</option>
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
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
						<button id="btnOficina" type="button" class="btn btn-block btn-success btn-round" data-toggle="modal" data-target=".modalOficina" disabled>Oficina</button>
					</div>
					<div class="col-md-4">
						<button id="btnVehiculo" type="button" class="btn btn-block btn-success btn-round" data-toggle="modal" data-target=".modalVehiculo" disabled>Vehiculo</button>
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
	<div class="espacio"></div>
</form>

@include('admin.activos.radioTrabajo.partials.oficina')
@include('admin.activos.radioTrabajo.partials.vehiculo')

@endsection