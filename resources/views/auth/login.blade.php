@extends('layouts.login')

@section('titulo', 'Login')

@push('estilos')
	<!-- NProgress -->
	<link href="/components/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="/components/animate.css/animate.min.css" rel="stylesheet">
@endpush

@push('acciones')
@endpush

@section('contenido')
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>

	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				@include('auth.formLogin')
			</section>
		</div>

		<div id="register" class="animate form registration_form">
			<section class="login_content">
				@include('auth.formRegister')
			</section>
		</div>
	</div>
@endsection
