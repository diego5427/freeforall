@extends('layouts.app')
@section('title', 'Registrarse')

@section('content')
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('images/usuarios/registrarse.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card tarjeta-registro">
						<form class="form" method="POST" action="{{ route('register') }}">
							@csrf
							<div class="header header-primary text-center">
								<h4>Crear cuenta</h4>
							</div>
							<p class="text-divider">¡Genial, serás un miembro más!</p>
							<div class="content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">account_box</i>
									</span>
									{{-- caja de texto-nombre --}}
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') }}" required autocomplete="name" autofocus>
									{{-- error-nombre --}}
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									{{-- correo electronico --}}
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
									{{-- error-correo --}}
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">vpn_key</i>
									</span>
									{{-- contraseña --}}
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
									{{-- error-contraseña --}}
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input id="password-confirm" name="password_confirmation" type="password" placeholder="Repetir contraseña..." class="form-control" />
									
								</div>


								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" checked>
										Acepto los <a href="#" target="_blank">términos y condiciones</a>
									</label>
								</div>
							</div>
							<div class="footer text-center" style="min-height: 100px;">
								<button type="submit" class="btn btn-simple btn-primary btn-lg">Registrarse <i class="material-icons"></i>
									
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
