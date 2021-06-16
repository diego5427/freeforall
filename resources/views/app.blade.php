<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- Internet Explorer -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Contenido adaptable -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>FreeForAll @yield('title')</title>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

		<!-- Vendor Styles -->

		<link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/Camera-master/css/camera.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.theme.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/WOW-master/css/libs/animate.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fancybox/dist/jquery.fancybox.min.css')}}">


		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
		<link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('fonts/icon/font/font/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('fonts/icon/font/2/flaticon.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
		
		
		
		
		
	</head>

	<body>
		<div class="main-page-wrapper home-page-two">

			<div class="html-top-content">
				
				<!-- Menú -->
				<header class="theme-main-header contact">
					<div class="container">
						<div class="menu-wrapper clearfix">
							<div class="logo float-left"><a href="{{url('/')}}"><img src="images/logo.png" alt="Logo"></a></div>

							<ul class="button-group float-right">
								<li>
									<a href="{{url('/')}}">
										<i class="material-icons">home</i> Inicio
									</a>
								</li>
								<li>
									<a href="{{route('login')}}" >
										<i class="material-icons">fingerprint</i> Ingresar
									</a>
								</li>
								<li>
									<a href="{{route('register')}}" >
										<i class="material-icons">person_add</i> Registrarse
									</a>
								</li>
								<li>
									<a href="{{url('/contactos')}}" >
										<i class="material-icons">contact_mail</i> Contacto
										</a>
								</li>
								<li>
									<a href="{{url('/blog')}}" >
										<i class="material-icons">chrome_reader_mode</i> Blog
										</a>
								</li>
								<li>
									<a href="{{url('/login')}}">
									{{-- codigo para cerrar sesion --}}
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>
									 Salir</a>
										<form id="logout-form" action="{{ route('logout') }}"method="POST" class="d-none">
										@csrf
										</form>
									</a>
								</li>												
							</ul>						
						</div> 
					</div> 
				</header> 
				<!-- /Menú  -->
                @section('content')
                @show
	
				<!-- Footer -->
				<footer>
					<div class="container">
						<div class="footer-data-wrapper">

							<div class="bottom-footer">
								<div class="row">
									<div class="col-lg-6 col-md-7 col-xs-12 text-right pull-right">
										<ul class="footer-menu">
											<li><a href="{{url('/blog')}}" class="tran3s">Blog</a></li>
											<li><a href="{{url('/nosotros')}}" class="tran3s">Nosotros</a></li>
											<li><a href="{{url('/adopcion')}}" class="tran3s">Adopción </a></li>
											<li><a href="{{url('/legal')}}" class="tran3s">Legal</a></li>
										</ul>
										
										<ul>
											<li class="search-form" style="margin-right: 40px;">
											<form action="">
													<input class="buscar" align="middle" type="text" name="" placeholder="¿Qué deseas buscar?">
													<button type="submit" >
														<i class="material-icons">search</i>
													</button>
												</form>
											</li>	
										</ul><br>

										<ul class="social-icon">
											<li><a href=https://es-la.facebook.com/ class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											{{-- "{{ setting('site.facebook'))}}" --}}
											<li><a href=https://twitter.com/?lang=es class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											{{-- "{{ setting('site.tewitter'))}}" --}}
											<li><a href=https://dribbble.com/ class="tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											{{-- "{{ setting('site.pinterest'))}}" --}}
											<li><a href=https://www.pinterest.ca/ class="tran3s"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-5 col-xs-12 footer-logo">
										<div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="Logo"></a></div>
										<p>Freestyle para &#10084; <strong> TODOS</strong></p>
									</div>
								</div> 
							</div> 
						</div>
					</div> 
				</footer>
				<!-- /Footer -->


				<!-- Top Button -->
					<button class="scroll-top tran3s color-one-bg" style="background: black; color: white;">
						<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
					</button>
					<!-- /Top Button -->


				<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
				<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
				<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
				<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
				<script type='text/javascript' src='vendor/Camera-master/scripts/camera.min.js'></script>
				<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
				<script type="text/javascript" src="vendor/tilt.js/src/tilt.jquery.js"></script>
				<script type="text/javascript" src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
				<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
				<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
				<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
				<script type="text/javascript" src="js/theme.js"></script>
			</div>
		</div> 
	</body>
</html>