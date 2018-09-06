@extends('layouts.app')

@section('titulo', 'Index')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
	<div class="right_col" role="main">
		<div class="row mid_center" style="width: 100%">
			<img src="{{ Storage::url('logo/ACT.png') }}">
			<h3>Página incial al Sistema</h3>
		</div>
	</div>
@endsection