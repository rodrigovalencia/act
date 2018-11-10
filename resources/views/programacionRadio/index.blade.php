@extends('layouts.app')

@section('titulo', 'Programacion de Radios Trabajo')

@push('estilos')

@endpush
@section('contenido')
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="" role="tabpanel" data-example-id="togglable-tabs">
		<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
			<li role="presentation" class="">
				<a href="#tab_content" role="tab" id="RadioTrabajo-tab" data-toggle="tab" aria-expanded="false">Radio de Trabajo</a>
		</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="tab_content" aria-labelledby="home-tab">
					<p>aqui va el listado de Tickets por activo</p>
					<table id="tablaTickets" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nro. Ticket</th>
								<th>Fecha Creación</th>
								<th>Categoría</th>
								<th>Usuario Creador</th>
								<th>Area</th>
								<th>Estado Ticket</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
	</div>
</div>
@endsection