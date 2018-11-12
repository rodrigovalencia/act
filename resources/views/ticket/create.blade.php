@extends('layouts.app')

@section('titulo', ' Crear Ticket')

@push('estilos')
<style>
	.columna{
		overflow: auto;
		height: 200px;
	}
	.espacio{
		height: 50px;
	}
	.dropdown-submenu {
	position: relative;
	}

	.dropdown-submenu>.dropdown-menu {
		top: 0;
		right: 100%;
		margin-top: 20px;
		margin-left: -120px;
		-webkit-border-radius: 0 6px 6px 6px;
		-moz-border-radius: 0 6px 6px;
		border-radius: 0 6px 6px 6px;
	}

	.dropdown-submenu:hover>.dropdown-menu {
		display: block;
	}

	.dropdown-submenu>a:after {
		display: block;
		content: " ";
		float: right;
		width: 0;
		height: 0;
		border-color: transparent;
		border-style: solid;
		border-width: 5px 0 5px 5px;
		border-left-color: #ccc;
		margin-top: 5px;
		margin-right: -10px;
	}

	.dropdown-submenu:hover>a:after {
		border-left-color: #fff;
	}

	.dropdown-submenu.pull-right {
		float: none;
	}

	.dropdown-submenu.pull-right>.dropdown-menu {
		right: -100%;
		margin-right: 10px;
		-webkit-border-radius: 6px 0 6px 6px;
		-moz-border-radius: 6px 0 6px 6px;
		border-radius: 6px 0 6px 6px;
	}
</style>
@endpush

@push('acciones')
	<script>
		$("#btnValidaTicket").on('click', function(e){
			var filas = $("#tableActivos").find("tr"); 
			var valores ="";
			for (i=0; i<filas.length; i++){
				var celdas = $(filas[i]).find("td");
				valores = valores + $(celdas[0]).text() + ";";
			}
			$("#idRadiosHidden").val(valores.substring(1,valores.length-1));
		});
		$("#btnImprimeTicket").on('click', function(e){
			e.preventDefault();
		});
		$('#tipoTicket').on('change', function(e){
			$('#catTicket').prop('disabled', false);
		});
		$('#Area_id').on('change', function(e){
			$('#txtNombre').prop('disabled', false);
			$('#txtTelefono').prop('disabled', false);
			$('#selTipoActivo').prop('disabled', false);
		});
		$('#selTipoActivo').on('change', function(e){
			$('#nSerie').prop('disabled', false);
			$('#btnAgregarActivo').prop('disabled', false);
			$('#observaciones').prop('disabled', false);
		});
		$('#selFaena').on('change', function(e){
			var Faena_id = e.target.value;
			url = '{{ route("ajax.faena.ubicaciones", ":id") }}';
			url = url.replace(':id', Faena_id);
			$.get(url, function(data) {
				$('#selUbicacion').empty();
				$('#selUbicacion').append('<option value="0" selected="true">** Seleccione una Ubicación **</option>');
				$.each(data, function(index, ubicacion){
					$('#selUbicacion').append('<option value="'+ ubicacion['id'] +'">'+ ubicacion['nombre'] +'</option>');
				});
				$('#selUbicacion').prop('disabled', false);
			});
		});
		$('#selUbicacion').on('change', function(e){
			var Ubicacion_id = e.target.value;
			url = '{{ route("ajax.faena.areas", ":id") }}';
			url = url.replace(':id', Ubicacion_id);
			$.get(url, function(data) {
				$('#Area_id').empty();
				$('#Area_id').append('<option value="0" selected="true">** Seleccione un Área **</option>');
				$.each(data, function(index, area){
					$('#Area_id').append('<option value="'+ area['id'] +'">'+ area['nombre'] +'</option>');
				})
				$('#Area_id').prop('disabled', false);
			});
		});
		$('#catTicket').on('change', function(e){
			var catTicket_id = e.target.value;
			url = '{{ route("ajax.faena.subCategoriasTicket", ":id") }}';
			url = url.replace(':id', catTicket_id);
			$.get(url, function(data) {
				$.each(data,function (index,nombre){
					$('#CategoriaTicket_id').append('<option value="' + nombre['id'] + '">' + nombre['nombre'] + '</option>');	
				});
				$('#CategoriaTicket_id').prop('disabled', false);
			});
		});
		$('#CategoriaTicket_id').on('change', function(e){
			$('#selFaena').prop('disabled', false);
		});
		$('#btnAgregarActivo').on('click', function(e){
			e.preventDefault();
			var nSerie_id = $('#nSerie').val();
			var tipoActivo_name = $('#selTipoActivo option:selected').text();
			if(!nSerie_id){
				alert("Por Favor, ingrese N° de Serie");
			}
			else{
				url = '{{ route("ajax.faena.buscarActivo", [":id",":activeType"]) }}';
				url = url.replace(':id', nSerie_id);
				url = url.replace(':activeType', tipoActivo_name);
				$.get(url, function(data) {
					if(!$.trim(data)){
						alert("Activo no ha sido ingrado al Sistema, por favor cree Activo en el Sistema.");
					}
					else{
						if($("#empresa").val() == ""){
							$("#empresa").val(data["empresa"]);
							var addfila = "<tr><td style:'display:none'>" + data["id"] + "</td><td>" + data["serie"] + "</td><td>" + data["empresa"] + "</td><td>Formulario1</td><td><button id ='btnEliminar' class='btn btn-danger' onclick='deleteRow(this)'> - </button></td></tr>";
								$('#tableActivos tbody').append(addfila);
								$('td:nth-child(1)').hide();
						}
						else{
							if($("#empresa").val() == data["empresa"]){
								var addfila = "<tr><td style:'display:none'>" + data["id"] + "</td><td>" + data["serie"] + "</td><td>" + data["empresa"] + "</td><td>Formulario1</td><td><button id ='btnEliminar' class='btn btn-danger' onclick='deleteRow(this)'> - </button></td></tr>";
								$('#tableActivos tbody').append(addfila);
								$('td:nth-child(1)').hide();
							}
							else{
								alert("Activo pertenece a Empresa " + data["empresa"] + ", por favor verifique información.");
							}
						}
					}
				});
			}
		});
		function deleteRow(btn){ 
			var row = btn.parentNode.parentNode; row.parentNode.removeChild(row); 
			var rowCount = $('#tableActivos >tbody >tr').length;
			if(rowCount==0){
				$("#empresa").val("");
			}
		};
	</script>
	{{-- <script src="/components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script> --}}
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
	<form method="POST" action="{{ route('ticket.store') }}" class="form-horizontal form-label-left" role="form">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label col-md-3 col-xs-12">Tipo Ticket</label>
					<div class="col-md-9 col-xs-12">
						<select id="tipoTicket" name="tipoTicket" class="select2_single form-control" tabindex="-1">
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
						<select id="catTicket" name="catTicket" class="select2_single form-control" tabindex="-1" disabled>
							<option value="0" disable="true" selected="true">** Seleccione una Categoria **</option>
								@foreach ($categorias as $categoria => $nombre)
									<option value="{{ substr($nombre, 4) }}">{{ substr($nombre, 4) }}</option>
								@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label col-md-3 col-xs-12">SubCategoría</label>
					<div class="col-md-9 col-xs-12">
						<select id="CategoriaTicket_id" name="CategoriaTicket_id" class="select2_single form-control" tabindex="-1" disabled>
							<option value="0" disable="true" selected="true">** Seleccione una SubCategoria **</option>
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
						<select id="selFaena" name="selFaena" class="select2_single form-control" tabindex="-1" disabled>
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
						<select id="selUbicacion" name="selUbicacion" class="select2_single form-control" tabindex="-1" disabled>
							<option value="0" disable="true" selected="true">** Seleccione una Ubicación **</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label col-md-3 col-xs-12">Área</label>
					<div class="col-md-9 col-xs-12">
						<select id="Area_id" name="Area_id" class="select2_single form-control" tabindex="-1" disabled>
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
						<input class="form-control" title="Ingrese Apellido Paterno, Apellido Materno y Primer Nombre" id="txtNombre" name="txtNombre" required disabled>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label col-md-3 col-xs-12">Teléfono</label>
					<div class="col-md-9 col-xs-12">
						<input class="form-control" title="Ingrese N° Telefónico" id="txtTelefono" name="txtTelefono" required disabled>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label col-md-3 col-xs-12">Empresa</label>
					<div class="col-md-9 col-xs-12">
						<input type="text" id="empresa" name="empresa" class="form-control text-center" readonly="readonly">
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
							<select id="selTipoActivo" name="selTipoActivo" class="select2_single form-control" tabindex="-1" disabled>
								<option value="0" disable="true" selected="true">** Seleccione un tipo de Activo **</option>
								@foreach ($tipoActivos as $tipoActivo)
									<option value="{{ $tipoActivo->id }}">{{ $tipoActivo->nombre }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label class="control-label col-md-4 col-xs-12">Nº de Serie</label>
						<div class="col-md-8 col-xs-12">
							<input class="form-control" title="Ingrese N° d Serie" id="nSerie" name="nSerie" disabled>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-block btn-primary" id="btnAgregarActivo" name="btnAgregarActivo" disabled>Agregar</button>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-md-offset-2">
				<div class="columna">
					<table class="table table-inverse" id="tableActivos" name="tableActivos">
						<thead>
							<tr>
								<th style="display:none">idRadio</th>
								<th>Serie</th>
								<th>Empresa</th>
								<th>Formulario Asignacion</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<label class="control-label">Observaciones</label>
				</div>
				<div class="row">
					<textarea class="form-control" id="observaciones" name="observaciones" rows="5" disabled></textarea>
					<input type="hidden" id="idRadiosHidden" name="idRadiosHidden">
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-2 col-md-offset-3">
				<button class="btn btn-block btn-primary" id="btnImprimeTicket" name="btnImprimeTicket">Imprimir</button>
			</div>
			<div class="col-md-2 col-md-offset-2">
				<button class="btn btn-block btn-primary" type="submit" id="btnValidaTicket" name="btnValidaTicket">Validar Ticket</button>
			</div>
		</div>
	</form>
	
<div class="espacio"></div>
</div>

@endsection