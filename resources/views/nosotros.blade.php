<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('app.name', 'Denuncias Anónimas')</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />



	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../shaape/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../shaape/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../shaape/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../shaape/css/magnific-popup.css">

	<!-- Theme style  -->

	<!-- Modernizr JS -->
	<script src="../shaape/js/modernizr-2.6.2.min.js"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        	<link rel="stylesheet" href="../shaape/css/style.css">

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
        <nav class=" color navbar navbar-expand-md navbar-light navbar-laravel" data-color="jade">
            <div class="container" data-color="jade">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Denuncias Anónimas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                                   <img class="rounded-circle ml-2 mr-2" height="40px" src="{{ Auth::user()->avatar }}">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#segundo" aria-controls="segundo" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="segundo">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="principal">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aplicacion">APLICACIÓN</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="nosotros">NOSOTROS</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="principal">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="denunciar">DENUNCIAR</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="estadistica">ESTADISTICA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aplicacion">APLICACIÓN</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="nosotros">NOSOTROS</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
	<div id="page">

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../shaape/images/lima.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Acerca de Nosotros</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-about">
		<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Nosotros</span>
						<h2>Resumen</h2>
						<p>Somos una aplicación con la finalidad de luchar principalmente con la corrupción y delicuencia que existe en la capital de Lima - Perú, además de brindar la oportunidad
                                                de denunciar otros tipos de incidentes para que así los demás usuarios puedan tener un conocimiento del estado de un cierto lugar.
                                                </p>
					</div>
				</div>
				<div class="row row-pb-md animate-box">
					<div class="col-md-6 col-md-push-6">
						
						<div class="desc">
							<h3>Misión &amp; Visión</h3>
							<p>La misión de esta aplicación es prestar atención a el llamado de los ciudadanos limeños, que día a día, sufren o presencian series de delitos y/o incidentes que suele pasar muy a menudo en esta capital. Es por ello que mediante este sistema de denuncias anónimas permitimos
                                                         a los habitantes de la capital peruana, alzar su voz de protesta sin algún tipo de riesgo respecto a su identidad personal.
                                                        </p> 
							<p>Nuestra visión es poder generalizar más este beneficio para todo el Perú, para que así todos los peruanos seamos escuchados y que juntos podamos luchar contra la corrupción ciudadana</p>
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<img class="img-responsive" src="../shaape/images/delincuencia.jpg" alt="Delincuencia">
					</div>
					
				</div>
			
		</div>
	</div>

	<div id="fh5co-team" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Quienes hicieron posible esto</span>
					<h2>Conoce nuestro equipo</h2>
					<p>DISEÑO DE SOFTWARE E INTEGRACIÓN DE SISTEMAS 2018-I</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="../shaape/images/leidy.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Leidy Callupe</h3>
						<strong class="role">Developer</strong>
						<p>Estudiante de la carrera de Diseño de Software e Integración Sistemas 3er Ciclo del Instituto Tecnológico Tecsup.</p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/leidy.callupesantisteban.56" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/leidy-callupe-santisteban-353598145/" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="../shaape/images/jose.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>José Cristobal</h3>
						<strong class="role">Developer</strong>
						<p>Estudiante de la carrera de Diseño de Software e Integración Sistemas 3er Ciclo del Instituto Tecnológico Tecsup.</p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/jose.cristobal.7792" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/jose-luis-cristobal-erquinio-90a36a143/" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://github.com/joseluis0218" target="_blank"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="../shaape/images/erick.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Erick Fernández</h3>
						<strong class="role">Developer</strong>
						<p>Estudiante de la carrera de Diseño de Software e Integración Sistemas 3er Ciclo del Instituto Tecnológico Tecsup.</p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/Roy360erick" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/erick-roy-fernandez-terrel-597369143/" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://github.com/Fernandex360" ><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../shaape/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../shaape/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../shaape/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../shaape/js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="../shaape/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../shaape/js/jquery.magnific-popup.min.js"></script>
	<script src="../shaape/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../shaape/js/main.js"></script>

	</body>
</html>

