<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('app.name', 'Denuncias Anonimas')</title>
     <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

  
    {!! Html::style('assets/css/material-bootstrap-wizard.css') !!}
    {!! Html::style('bootstrap4/css/bootstrap.min.css') !!}

</head>
<body>
    <div id="app">
    <nav class="baner navbar navbar-expand-lg navbar-light bg-light m-0 "data-color="jade" >
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
                <a class="nav-link" href="/">INICIO</a>
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
        </main>
    
    {!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/jquery.bootstrap.js') !!}
    {!! Html::script('assets/js/material-bootstrap-wizard.js') !!}
    {!! Html::script('assets/js/jquery.validate.min.js') !!}
</body>
</html>
