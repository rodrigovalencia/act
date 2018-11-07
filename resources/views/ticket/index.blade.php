@extends('layouts.app')

@section('titulo', ' Visualizar Tickets')

@push('estilos')

@endpush

@push('acciones')

<script>
	$( window ).load(function() {
	  // alert("cuando cargo salgo por aca");
	  
	  
	});
</script>
@endpush

@section('contenido')
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="" role="tabpanel" data-example-id="togglable-tabs">
		<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
			<li role="presentation" class="active">
				<a href="#tab_content1" id="CCTV-tab" role="tab" data-toggle="tab" aria-expanded="true">CCTV</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content2" role="tab" id="Computador-tab" data-toggle="tab" aria-expanded="false">Computador</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content3" role="tab" id="DipsRed-tab" data-toggle="tab" aria-expanded="false">Dispositivo de Red</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content4" role="tab" id="RadioComercial-tab" data-toggle="tab" aria-expanded="false">Radio Comercial</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content5" role="tab" id="RadioTrabajo-tab" data-toggle="tab" aria-expanded="false">Radio de Trabajo</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content6" role="tab" id="Impresora-tab" data-toggle="tab" aria-expanded="false">Impresora</a>
			</li>
			<li role="presentation" class="">
				<a href="#tab_content7" role="tab" id="Celular-tab" data-toggle="tab" aria-expanded="false">Celular</a>
			</li>
		</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
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
				<div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
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
<!-- <table id="tablaTickets" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
</table> -->
@include('ticket.derivar')
@endsection

