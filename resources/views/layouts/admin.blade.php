<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"/>

    {!! Html::script('js/jquery-3.3.1.min.js') !!}
    {!! Html::style('bootstrap4/css/bootstrap.min.css') !!}
    {!! Html::style('css/estilos.css') !!}
    {!! Html::style('css/fontello.css') !!}
    {!! Html::script('bootstrap4/js/bootstrap.min.js') !!}
    {!! Html::style('DataTables/datatables.min.css') !!}
    {!! Html::script('DataTables/datatables.min.js') !!}

    <title>@yield('titulo')</title>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            
            <div class="barra-lateral">
            <nav class="menu ">
                <a href="/reporte"><span class=" icon-eye"></span><h4 class="item2">Registros</h4></a>
                <a href="/galeria"><span class="icon-camera"></span><h4 class="item3">Evidencias</h4></a>
                <a href="/usuario"><span class="icon-users"></span><h4 class="item7">Usuarios</h4></a>
                <a href="#" id="enviar"><span class="icon-logout"></span><h4 class="item8">Salir</h4></a>

                <form method="post" id="formulario" action="{{route('logout')}}">
                     {{csrf_field()}}
                 </form>
            </nav>
            </div>
            <main class="col-12">
                @yield('contenido')
            </main>
        </div>
    </div>
<script> 
    $(document).ready(function() {
    $('#tabla').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });

    $( "#enviar" ).click(function() {
    $( "#formulario" ).submit();

    });
    } );
</script>
</body>
</html>