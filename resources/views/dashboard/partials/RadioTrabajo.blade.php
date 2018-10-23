@push('acciones')
	<script>
		$('#datatable-responsive{{ $loop->iteration }}').DataTable();
	</script>
@endpush

<table id="datatable-responsive{{ $loop->iteration }}" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Fabricante</th>
			<th>Modelo</th>
			<th>Serie</th>
			<th>Sistema</th>
			<th>ID</th>
			<th>Flash Port</th>
			<th>Faena</th>
			<th>Ubicacion</th>
			<th>Area</th>
			<th>Responsable Mandante</th>
			<th>Responsable Tercero</th>
			<th>Ubicable</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($radiosTrabajo as $item)
			<tr>
				<td>{{ $item->modeloRadio->fabricante->nombre }}</td>
				<td>{{ $item->modeloRadio->nombre }}</td>
				<td>{{ $item->serie }}</td>
<<<<<<< HEAD
				<td>{{ $item->modeloRadio->sistemas->pluck('nombre') }}</td>
=======
				<td>{{ $item->modeloRadio->sistema->nombre }}</td>
>>>>>>> JNunez
				<td>{{ $item->idSistema }}</td>
				<td>{{ $item->flashPort }}</td>
				<td>{{ $item->area->ubicacion->faena->nombre }}</td>
				<td>{{ $item->area->ubicacion->nombre }}</td>
				<td>{{ $item->area->nombre }}</td>
				<td>{{ $item->mandante->getNombreCompleto() }}</td>
<<<<<<< HEAD
				<td>{{ ($item->tercero) ? $item->tercero->getNombreCompleto() : '' }}</td>
				<td>{{ ($item->ubicacionRadio) ? $item->ubicacionRadio->ubicable->getNombre() : '' }}</td>
=======
				<td>{{ $item->tercero->getNombreCompleto() }}</td>
				<td>{{ $item->ubicacionRadio->ubicable->getNombre() }}</td>
>>>>>>> JNunez
			</tr>
		@endforeach
	</tbody>
</table>