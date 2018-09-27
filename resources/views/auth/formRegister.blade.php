<form method="POST" action="{{ route('register') }}">
	<h1>Crear Cuenta</h1>
	@csrf

	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

		<div class="col-md-6">
			<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

			@if ($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group row">
		<label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

		<div class="col-md-6">
			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

			@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group row">
		<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

		<div class="col-md-6">
			<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

			@if ($errors->has('password'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group row">
		<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Password</label>

		<div class="col-md-6">
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
		</div>
	</div>

	<div class="form-group row mb-0">
		<div class="col-md-12 offset-md-4">
			<button type="submit" class="btn btn-primary">
				Registrarse
			</button>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="separator">
		<p class="change_link">¿Ya es miembro?
			<a href="#signin" class="to_register"> Ingresar </a>
		</p>

		<div class="clearfix"></div>
		<br />

		<div>
			<h1><i class="fa fa-paw"></i> ACT</h1>
			<p>©2018 All Rights Reserved. ACT "We Act First"</p>
		</div>
	</div>

</form>