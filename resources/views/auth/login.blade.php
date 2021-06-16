@extends('layouts.app')
@section('title', 'Ingresar')

@section('content')
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('images/usuarios/ingresar.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card tarjeta-registro">
					{{-- Inicio de formulario login --}}
						<form class="form" method="POST" action="{{ route('login') }}">
							@csrf
							<div class="header header-primary text-center">
								<h4>Ingresar</h4>
							</div>
							<p class="text-divider">¡Volviste! Bienvenido nuevamente &#10084;</p><br>
							<div class="content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									{{-- caja de texto de correo electronico --}}
									<input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
									name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
									placeholder="Correo electrónico...">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Contraseña..." class="form-control @error('password') is-invalid @enderror" 
									name="password" required autocomplete="current-password" />

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div><br>


								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" id="remember" {{ old 
										('remember') ? 'checked' : '' }}>
										Recordar mis datos
									</label>
								</div><br>
							</div>
							<div class="footer text-center">
								<button type="submit" class="btn btn-simple btn-primary btn-lg" type="submit">Ingresar 
									<i class="material-icons">fingerprint</i></button>
							</div>
							
							<div class="password">
								<a href="{{ route('password.request') }}"><span class="label label-danger">¿Olvidaste la contraseña?</span></a>
							</div>						
						</form>
					</div>
				</div>
			</div>
		</div>


@endsection
