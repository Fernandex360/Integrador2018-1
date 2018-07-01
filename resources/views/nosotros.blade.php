<head>
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="../shaape/css/animate.css">
	{!! Html::style('../bootstrap4/css/bootstrap.min.css') !!}
	<title>@yield('app.name', 'Denuncias Anonimas')</title>


	<link rel="stylesheet" href="../shaape/css/icomoon.css">
		<link rel="stylesheet" href="../shaape/css/bootstrap.css">

	<link rel="stylesheet" href="../shaape/css/magnific-popup.css">
	<script src="../shaape/js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="../shaape/css/style.css">
	</head>
	<nav  class="navbar-expand-lg navbar navbar-light " style="background-color: rgb(0, 194, 169);">
      <a class="navbar-brand ml-5" href="/">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
        <ul class="navbar-nav ml-5">
                        <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Administrador') }}</a>
            </li>
            @else
            <li class="nav-item dropdown ">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <img class="rounded-circle ml-2 mr-2" height="40px" src="{{ Auth::user()->avatar }}">
                </a>
            <div class="dropdown-menu dropdown-menu-right  ml-2"  aria-labelledby="navbarDropdown">
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
    </nav>
	
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../shaape/images/lima.jpg);">
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
	
