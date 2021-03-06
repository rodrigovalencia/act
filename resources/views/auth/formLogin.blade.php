
{{-- <form method="POST" action="{{ route('login') }}"> --}}
	<h1>Login Form</h1>
	@csrf

	<div class="form-group row">
		<label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

		<div class="col-md-6">
			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
		<div class="col-md-6 offset-md-4">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

				<label class="form-check-label" for="remember">
					Recuerdame
				</label>
			</div>
		</div>
	</div>

	<div class="form-group row mb-0">
		<div class="col-md-12 offset-md-4">
			<button type="submit" class="btn btn-primary">
				Login
			</button>

			{{-- <a class="btn btn-link" href="{{ route('password.request') }}">
				¿Olvido su password?
			</a> --}}
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="separator">
		<p class="change_link">¿Nuevo en el sitio?
			<a href="#signup" class="to_register"> Crear Nueva Cuenta </a>
		</p>

		<div class="clearfix"></div>
		<br />

		<div>
			<h1><i class="fa fa-paw"></i> ACT</h1>
			<p>©2018 All Rights Reserved. ACT "We Act First"</p>
		</div>
	</div>
</form>