
@section('titulo','Aplicacion')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->

    <!-- Place favicon.ico in the root directory -->
    <!-- Plugin-CSS -->
    
    <link rel="stylesheet" href="../templatee/css/bootstrap.min.css">
    <link rel="stylesheet" href="../templatee/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../templatee/css/themify-icons.css">
    <link rel="stylesheet" href="../templatee/css/magnific-popup.css">
    <link rel="stylesheet" href="../templatee/css/animate.css">
    <!-- Main-Stylesheets -->
    {!! Html::style('../bootstrap4/css/bootstrap.min.css') !!}
    <link rel="stylesheet" href="../templatee/css/normalize.css">
    <link rel="stylesheet" href="../templatee/style.css">
    <link rel="stylesheet" href="../templatee/css/responsive.css">
    <script src="../templatee/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
<nav  class="navbar-expand-lg navbar navbar-light " style="background-color: rgb(0, 194, 169);">
      
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
	



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Descarga nuestra app gratis</h2>
                    <p>Obten la aplicación movil y luchemos por la seguridad ciudadana.</p>
                    <a href="https://drive.google.com/a/tecsup.edu.pe/uc?export=download&id=14XBFVBMt_6z2BIa_AYbQS0CSeWl5dWbg" class="button white">Descargar</a>
                </div>
                <div class="col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="../templatee/images/screen-1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../templatee/images/screen-2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../templatee/images/screen-3.png" alt="">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->


    <!--Vendor-JS-->
    <script src="../templatee/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../templatee/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="../templatee/js/owl.carousel.min.js"></script>
    <script src="../templatee/js/contact-form.js"></script>
    <script src="../templatee/js/jquery.parallax-1.1.3.js"></script>
    <script src="../templatee/js/scrollUp.min.js"></script>
    <script src="../templatee/js/magnific-popup.min.js"></script>
    <script src="../templatee/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="../templatee/js/main.js"></script>
</body>

</html>

