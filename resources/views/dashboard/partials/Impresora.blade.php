@push('acciones')
	<script>
		$('#datatable-responsive{{ $loop->iteration }}').DataTable();
	</script>
@endpush
{{ $tipo }}