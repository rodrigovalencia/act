@extends('layouts.app')

@section('titulo', 'Publico')

@push('estilos')
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
@endpush

@section('contenido')
		<div class="row mid_center" style="width: 100%">
			<h3>Inventario de Activos</h3>
		</div>
		<div class="col-xs-12">
			<div class="" role="tabpanel" data-example-id="togglable-tabs"> 
				<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
					@foreach ($tipos as $tipo)
						@php
							if ($loop->iteration === 1) {
								$cadena0 = 'active';
								$cadena1 = 'home-tab';
								$cadena2 = 'true';
							} else {
								$cadena0 = '';
								$cadena1 = 'tab';
								$cadena2 = 'false';
							}
						@endphp
						<li role="presentation" class="{{ $cadena0 }}">
							<a href="#tab_content{{ $loop->iteration }}" id="{{ $cadena1 }}" role="tab" data-toggle="tab" aria-expanded="{{ $cadena2 }}">
								{{ $tipo }}
							</a>
						</li>
					@endforeach
				</ul>
				<div id="myTabContent" class="tab-content">
					@foreach ($tipos as $tipo)
						@php
							if ($loop->iteration === 1) {
								$cadena0 = 'active in';
								$cadena1 = 'home-tab';
							} else {
								$cadena0 = '';
								$cadena1 = 'profile-tab';
							}
							$cadena2 = 'dashboard.partials.'
						@endphp
						<div role="tabpanel" class="tab-pane fade {{ $cadena0 }}" id="tab_content{{ $loop->iteration }}" aria-labelledby="{{ $cadena1 }}">
							@include($cadena2 . $tipo)
						</div>
					@endforeach
				</div>
			</div>
		</div>
@endsection