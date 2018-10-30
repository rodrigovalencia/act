@push('acciones')
<script>

	$('#catEquipo').on('change', function(e){
		var id = e.target.value;

		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";

		$('#tipoEquipo').empty();
		$('#equipoEquipo').empty();
		$('#equipoEquipo').attr({'disabled': 'disabled'});
		$('#equipoEquipo').append('<option value="0" selected>- Seleccione un Tipo de Equipo -</option>');
		if (id==0) {
			$('#tipoEquipo').attr({'disabled': 'disabled'});
			$('#tipoEquipo').append('<option value="0" selected>- Seleccione una Categoría -</option>');
			$('#equipoEquipo').attr({'disabled': 'disabled'});
			$('#equipoEquipo').append('<option value="0" selected>- Seleccione una Categoría -</option>');
		} else {
			$('#tipoEquipo').removeAttr('disabled');

			var url = '{{ route("ajax.radioTrabajo.tiposEquipos", [":C_id", ":U_id"]) }}';
			url = url.replace(':C_id', id);
			url = url.replace(':U_id', document.getElementById("ubicacion").value);

			$.get(url, function(data) {
				$('#tipoEquipo').append('<option value="0" selected>- Seleccione un Tipo de Equipo -</option>');
				$.each(data, function(index, valor){
					$('#tipoEquipo').append('<option value="' + index + '">' + valor + '</option>');
				})
			});
		}
	});

	$('#tipoEquipo').on('change', function(e){
		var id = e.target.value;

		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";

		$('#equipoEquipo').empty();
		if (id==0) {
			$('#equipoEquipo').attr({'disabled': 'disabled'});
			$('#equipoEquipo').append('<option value="0" selected>- Seleccione un Tipo de Equipo -</option>');
		} else {
			$('#equipoEquipo').removeAttr('disabled');

			var url = '{{ route("ajax.radioTrabajo.equipos", [":T_id", ":U_id"]) }}';
			url = url.replace(':T_id', id);
			url = url.replace(':U_id', document.getElementById("ubicacion").value);

			$.get(url, function(data) {
				$('#equipoEquipo').append('<option value="0" selected>- Seleccione un Equipo -</option>');
				$.each(data, function(index, valor){
					$('#equipoEquipo').append('<option value="' + index + '">' + valor + '</option>');
				})
			});
		}
	});

	$('#equipoEquipo').on('change', function(e){
		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";
	});

	$('#btnAceptarVehiculo').click(function() {
		if (document.getElementById("equipoEquipo").value == 0) {
			alert('No se ha definido el equipo');
		} else {
			var cadena = $("#catEquipo :selected").text() + " - " + $("#tipoEquipo :selected").text() + " - " + $("#equipoEquipo :selected").text();
			document.getElementById("lugarInstalacion").value = cadena;

			document.getElementById("URadio_id").value = document.getElementById("equipoEquipo").value;
			$('#modalVehiculo').modal('hide');
		}
	});
</script>
@endpush

<div id="modalVehiculo" class="modal fade modalVehiculo">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"><strong>Ubicación de Instalación</strong></h4>
				<h4 class="modal-title">Radios de Vehículos</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h4>Tipo de estación vehículo</h4>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12">Categoria</label>
							<div class="col-sm-10 col-xs-12">
								<select id="catEquipo" class="select2_single form-control">
									<option value="0" selected="true">- Seleccione una Categoría -</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12">Tipo</label>
							<div class="col-sm-10 col-xs-12">
								<select id="tipoEquipo" class="select2_single form-control" disabled>
									<option value="0" selected="true">- Seleccione una Categoría -</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12">Equipo</label>
							<div class="col-sm-10 col-xs-12">
								<select id="equipoEquipo" class="select2_single form-control" disabled>
									<option value="0" selected="true">- Seleccione una Categoría -</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id="btnAceptarVehiculo">Definir Vehículo</button>
			</div>
		</div>
	</div>
</div>