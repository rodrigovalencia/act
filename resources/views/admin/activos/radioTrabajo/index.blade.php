@extends('layouts.app')

@section('titulo', 'Radios de Trabajo')

@push('estilos')
	<style>
		.espacio{
			height: 50px;
		}
		a.limpio{
			margin: 0px;
		}
	</style>
@endpush

@push('acciones')
	<script src="/components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="/components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="/components/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="/components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="/components/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="/components/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="/components/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="/components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/components/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="/components/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="/components/jszip/dist/jszip.min.js"></script>
	<script src="/components/pdfmake/build/pdfmake.min.js"></script>
	<script src="/components/pdfmake/build/vfs_fonts.js"></script>
	<script>
		$('#datatable').DataTable();

		function validarAccion(cadena){
			return confirm('¿Esta seguro de querer eliminar la Radio (Serie): ' + cadena + ' ?');
		}
	</script>
@endpush

@section('contenido')
<div class="col-md-10 col-md-offset-1">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Radios de Trabajo</strong></h3>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a class="btn btn-block btn-round btn-success" href="{{ route('admin.activos.radioTrabajo.create') }}">Agregar nueva radio</a>
		</div>
	</div>
	<div class="row">
		<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0">
			<thead>
				<tr>
					<th>Nº Serie</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>ID Sistema</th>
					<th>Empresa</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($radios as $radio)
					<tr>
						<th class="text-center">
							<a class="btn btn-sm btn-round btn-info limpio" href="{{ route('admin.activos.radioTrabajo.show', $radio->id) }}">
								{{ $radio->serie }}
							</a>
						</th>
						<th>{{ $radio->modeloRadio->fabricante->nombre }}</th>
						<th>{{ $radio->modeloRadio->nombre }}</th>
						<th>{{ $radio->idSistema }}</th>
						<th>{{ $radio->contrato->empresa->nombre }}</th>
						<th>{{ $radio->activo->estado->nombre }}</th>
						<th class="text-center">
							<form
								method="POST"
								action="{{ route('admin.activos.radioTrabajo.destroy', $radio->id) }}"
								style='display:inline-flex'>
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<div class="btn-group">
										<a href="{{ route('admin.activos.radioTrabajo.show', $radio->id) }}"
											class="btn btn-sm btn-round btn-primary">
												Reporte
										</a>
										<a href="{{ route('admin.activos.radioTrabajo.edit', $radio->id) }}"
											class="btn btn-sm btn-round btn-warning">
												Modificar
										</a>
										<button
											class="btn btn-sm btn-round btn-danger"
											type="submit"
											onclick="return validarAccion('{{ $radio->serie }}')">
												Eliminar
										</button>
									</div>
							</form>
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="espacio"></div>
</div>
@endsection