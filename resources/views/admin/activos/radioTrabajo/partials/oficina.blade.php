@push('acciones')
<script>
	$('#tipoBase').on('change', function(e){
		var id = e.target.value;

		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";
		if (id==0) {
			$('#baseBase').attr({'disabled': 'disabled'});

			$('#baseBase').empty();
			$('#baseBase').append('<option value="0" selected>- Seleccione un Tipo de Estación -</option>');
		} else {
			$('#baseBase').removeAttr('disabled');

			var url = '{{ route("ajax.radioTrabajo.bases", [":T_id", ":U_id"]) }}';
			url = url.replace(':T_id', id);
			url = url.replace(':U_id', document.getElementById("ubicacion").value);

			$.get(url, function(data) {
				$('#baseBase').empty();
				$('#baseBase').append('<option value="0" selected>- Seleccione un tipo de base -</option>');
				$.each(data, function(index, valor){
					$('#baseBase').append('<option value="' + index + '">' + valor + '</option>');
				})
			});
		}
	});

	$('#baseBase').on('change', function(e){
		document.getElementById("URadio_id").value = "";
		document.getElementById("lugarInstalacion").value = "";
	});

	$('#btnAceptarOficina').click(function() {
		if (document.getElementById("baseBase").value == 0) {
			alert('No se ha definido la base de la oficina');
		} else {
			var cadena = $("#tipoBase :selected").text() + " - " + $("#baseBase :selected").text();
			document.getElementById("lugarInstalacion").value = cadena;

			document.getElementById("URadio_id").value = document.getElementById("baseBase").value;
			$('#modalOficina').modal('hide');
		}
	});
</script>
@endpush

<div id="modalOficina" class="modal fade modalOficina">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"><strong>Ubicación de Instalación</strong></h4>
				<h4 class="modal-title">Radios de Oficina</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h4>Tipo de estación base</h4>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12">Tipo</label>
							<div class="col-sm-10 col-xs-12">
								<select id="tipoBase" class="select2_single form-control">
									<option value="0" selected="true">- Seleccione un Tipo de Estación -</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12">Base</label>
							<div class="col-sm-10 col-xs-12">
								<select id="baseBase" class="select2_single form-control" disabled>
									<option value="0" selected="true">- Seleccione un Tipo de Estación -</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id="btnAceptarOficina">Definir Oficina</button>
			</div>
		</div>
	</div>
</div>