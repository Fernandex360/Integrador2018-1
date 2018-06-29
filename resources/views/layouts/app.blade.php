<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<<<<<<< HEAD
    <title>@yield('app.name', 'Denuncias Anonimas')</title>
     <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

  
    {!! Html::style('assets/css/material-bootstrap-wizard.css') !!}
    {!! Html::style('bootstrap4/css/bootstrap.min.css') !!}
=======

    <title>@yield('app.name', 'Denuncias Anónimas')</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

<!--     Fonts and icons     -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<!-- CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="../assets/css/material-bootstrap-wizard.css" rel="stylesheet" />


	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="../shaape/css/style.css">
>>>>>>> 7fd9d15ce9c4a10e1dee0601fec49c6615604324

</head>
<body>
    <div id="app">
<<<<<<< HEAD
    <nav class="baner navbar navbar-expand-lg navbar-light bg-light m-0 "data-color="jade" >
=======
        <nav class=" p-0 color navbar navbar-expand-md navbar-light navbar-laravel" data-color="jade">
            <div class="container d-flex align-content-end ">
                <a class="navbar-brand " href="{{ url('/') }}">
                   Denuncias Anónimas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
            </div>
        </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
>>>>>>> 7fd9d15ce9c4a10e1dee0601fec49c6615604324
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
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        <main class="col-md-12 m-0">
            @yield('content')
<<<<<<< HEAD
        </main>
    
    {!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/jquery.bootstrap.js') !!}
    {!! Html::script('assets/js/material-bootstrap-wizard.js') !!}
    {!! Html::script('assets/js/jquery.validate.min.js') !!}
=======


	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="../assets/js/jquery.validate.min.js"></script>
    
        </main>
    </div>
    
>>>>>>> 7fd9d15ce9c4a10e1dee0601fec49c6615604324
</body>

</html>
