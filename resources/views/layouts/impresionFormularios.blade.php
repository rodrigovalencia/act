<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ACT">
	<title>{{-- {{ config('app.name') }} --}}ACT - @yield('titulo') </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	@stack('estilos')
</head>
<body>
	<div class="container-fluid">
		@yield('contenido')
		<hr class="divisor">
		@yield('contenido')
	</div>
	@stack('acciones')
</body>
</html>