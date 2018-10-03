@push('acciones')
<script>
	$('#tipoBase').on('change', function(e){
		var TipoBase_id = e.target.value;

		var url = '{{ route("ajax.radioTrabajo.bases", ":id") }}';
		url = url.replace(':id', TipoBase_id);

		$.get(url, function(data) {
			$('#baseBase').empty();
			$('#baseBase').append('<option value="0" disable="true" selected="true">*** Seleccione un tipo de base ***</option>');

			$.each(data, function(index, modelo){
				$('#baseBase').append('<option value="'+ modelo['id'] +'">'+ modelo['direccion'] +'</option>');
			})
		});
	});

	$('#btnOficina').click(function() {
		var cadena = $("#tipoBase :selected").text() + " - " + $("#baseBase :selected").text();
		document.getElementById("lugarInstalacion").value = cadena;

		document.getElementById("URadio_id").value = document.getElementById("baseBase").value;
		$('#modalOficina').modal('hide');
	});
</script>
@endpush

<div id="modalOficina" class="modal fade modalOficina" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><strong>Ubicación de Instalación</strong></h4>
				<h4 class="modal-title" id="myModalLabel">Radios de Oficina</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						
						<h4>Tipo de estación base</h4>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Tipo
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="tipoBase" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione un Tipo ***</option>
									@foreach ($tiposBase as $tipo)
									<option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Base
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="baseBase" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione un Tipo ***</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id= "btnOficina">Definir Oficina</button>
			</div>
		</div>
	</div>
</div>