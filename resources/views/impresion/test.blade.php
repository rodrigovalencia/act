@extends('layouts.impresionFormularios')

@section('titulo', 'Radios de Trabajo')

@push('estilos')
<style>
div.espacio{
	height: 5px;
}
div.caja{
	border: solid 1px;
	border-radius: 10px;
	margin: 10px 5px;
	padding: 10px 0px;
}
div.cajaEspecial{
	padding-right: 10px;
}
div.caja2{
	border: solid 1px;
	border-radius: 5px;
}
div.caja3{
	border: solid 1px;
	border-radius: 5px;
	margin: 0px 10px;
	height: 130px;
}
div.hijo{
	margin: 0px;
	width: 100%;
}
p.cero{
	margin: 2px 0px;
}
img.logo{
	width: 100%;
}
hr.divisor {
	margin: 20px;
	border-top: 2px solid black;
}
hr.firma{
	margin-top: 80px;
	border-top: 2px solid black;
}
</style>
@endpush

@push('acciones')
<script>
	if (document.addEventListener) { 
		document.addEventListener("DOMContentLoaded", inicializar, false);
	}

	function inicializar(){
		if (window.print) {
			window.print();
		} else {
			alert("La función de impresion no esta soportada por su navegador.");
		}
	}  
</script>
@endpush

@section('contenido')
<div class="row align-items-center">
	<div class="col-1,5">
		<img src="{{ Storage::url('logo/ACT.png') }}" alt="" class="logo">
	</div>
	<div class="col">
		<h5 class="text-center"><strong>Recepción de Equipos Radiocomunicaciones</strong></h5>
	</div>
	<div class="col-1,5">-
		<img src="{{ Storage::url('logo/ACT.png') }}" alt="" class="logo">
	</div>
</div>
<div class="caja cajaEspecial">
	<div class="row hijo justify-content-center ">
		<div class="col-1">
			<p class="text-center cero">OT Nº</p>
		</div>
		<div class="col-1 caja2">
			<p class="text-center cero">136</p>
		</div>
	</div>
	<div class="espacio"></div>
	<div class="row hijo">
		<div class="col-2">
			<p class="text-center cero">Fecha</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">25-10-2018</p>
		</div>
		<div class="col-2">
			<p class="text-center cero">Division</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">DRT</p>
		</div>
	</div>
	<div class="row hijo">
		<div class="col-2">
			<p class="text-center cero">Técnico Recibe</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">Francisco Cruz Bugueño</p>
		</div>
		<div class="col-2">
			<p class="text-center cero">CECO / GRAFO</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">906426910</p>
		</div>
	</div>
	<div class="row hijo">
		<div class="col-2">
			<p class="text-center cero">Entrega</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">Cristian Alonso Cifuentes</p>
		</div>
		<div class="col-2">
			<p class="text-center cero">Area</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">Proyecto</p>
		</div>
	</div>
	<div class="row hijo">
		<div class="col-2">
			<p class="text-center cero">Telefono</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">977689638</p>
		</div>
		<div class="col-2">
			<p class="text-center cero">Empresa</p>
		</div>
		<div class="col-4 caja2">
			<p class="cero">EMIN</p>
		</div>
	</div>
</div>

<div class="caja">
	<div class="row hijo">
		<div class="col">
			<p class="text-center cero">Detalle</p>
		</div>
		<div class="col">
			<p class="text-center cero">Resolución</p>
		</div>
	</div>
	<div class="row hijo">
		<div class="col caja3">
			<p class="text-center cero">SE RECIBEN 04 RADIOS PORTATILES PARA PROGRAMAR FRECUENCIAS DE PLANTA</p>
		</div>
		<div class="col caja3">
			<p class="text-center cero"></p>
		</div>
	</div>
</div>

<div class="row align-items-center">
	<div class="col-md-4 offset-md-1 text-center">
		<hr class="firma">
		Nombre y Firma Tecnico Recibe
	</div>
	<div class="col-md-2 text-center">
		<p>
			FECHA ENTREGA
		</p>
		<p>
			25102018
		</p>
	</div>
	<div class="col-md-4 text-center">
		<hr class="firma">
		Nombre y Firma Usuario Entrega
	</div>
</div>

@endsection