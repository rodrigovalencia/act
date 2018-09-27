<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="ACT">
		<title>{{-- {{ config('app.name') }} --}}ACT - @yield('titulo') </title>
		{{-- <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" /> --}}
		{{-- <link rel="stylesheet" href="{!! asset('css/app.css') !!}" /> --}}
		@include('layouts.partials.estilos')
		@stack('estilos')
	</head>
	<body class="login">
		<div>
			@yield('contenido')
			@include('layouts.partials.acciones')
			@stack('acciones')
		</div>
	</body>
</html>