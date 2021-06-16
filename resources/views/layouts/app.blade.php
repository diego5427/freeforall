<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>FreeForAll @yield('title')</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

	<!-- Style -->
    <link href="css/minificado/bootstrap.min.css" rel="stylesheet" />
    <link href="css/minificado/ingreso.min.css" rel="stylesheet"/>

</head>

<body class="pagina-ingreso">
	<nav class="navbar navbar-transparent navbar-absolute" style="padding-top: 65px;">
    	<div class="container">
        	
        	<div class="logo float-left"><a href="{{url('/')}}"><img src="images/logo.png" alt="Logo"></a></div>
        	
    	</div>
    </nav>

    @section('content')
    @show

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="{{url('/')}}">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/blog')}}">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Legal
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                <p>Freestyle para &#10084; <strong> TODOS</strong></p>
            </div>
        </div>
    </footer>


</body>
	<!--   JS   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>
	<script src="js/material-kit.js" type="text/javascript"></script>

</html>
