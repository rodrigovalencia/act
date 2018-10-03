@push('acciones')
<script>
	$('#catEquipo').on('change', function(e){
		var CatEquipo_id = e.target.value;

		var url = '{{ route("ajax.radioTrabajo.tiposEquipos", ":id") }}';
		url = url.replace(':id', CatEquipo_id);

		$.get(url, function(data) {
			$('#tipoEquipo').empty();
			$('#tipoEquipo').append('<option value="0" disable="true" selected="true">*** Seleccione un tipo de equipo ***</option>');

			$('#equipoEquipo').empty();
			$('#equipoEquipo').append('<option value="0" disable="true" selected="true">*** Seleccione un tipo de equipo ***</option>');

			$.each(data, function(index, modelo){
				$('#tipoEquipo').append('<option value="'+ modelo['id'] +'">'+ modelo['nombre'] +'</option>');
			})
		});
	});

	$('#tipoEquipo').on('change', function(e){
		var TipoEquipo_id = e.target.value;

		var url = '{{ route("ajax.radioTrabajo.equipos", ":id") }}';
		url = url.replace(':id', TipoEquipo_id);

		$.get(url, function(data) {
			console.log(data);
			$('#equipoEquipo').empty();
			$('#equipoEquipo').append('<option value="0" disable="true" selected="true">*** Seleccione un equipo ***</option>');

			$.each(data, function(index, modelo){
				$('#equipoEquipo').append('<option value="'+ modelo['id'] +'">'+ modelo['numero'] +'</option>');
			})
		});
	});

	$('#btnVehiculo').click(function() {
		var cadena = $("#catEquipo :selected").text() + " - " + $("#tipoEquipo :selected").text() + " - " + $("#equipoEquipo :selected").text();
		document.getElementById("lugarInstalacion").value = cadena;

		document.getElementById("URadio_id").value = document.getElementById("equipoEquipo").value;
		$('#modalVehiculo').modal('hide');
	});
</script>
@endpush

<div id="modalVehiculo" class="modal fade modalVehiculo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><strong>Ubicación de Instalación</strong></h4>
				<h4 class="modal-title" id="myModalLabel">Radios de Vehículos</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						
						<h4>Tipo de estación vehículo</h4>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Categoria
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="catEquipo" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione una categoría ***</option>
									@foreach ($catEquipos as $cat)
									<option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Tipo
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="tipoEquipo" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione una categoría ***</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Equipo
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="equipoEquipo" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione una categoría ***</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id= "btnVehiculo">Definir Vehículo</button>
			</div>
		</div>
	</div>
</div>