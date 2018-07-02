@extends('layouts.app')
@section('titulo','Estadistica')
@section('content')

<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad De Denuncias Registradas En Lima '
        },
        subtitle: {
            text: 'Denuncias Anonimas '
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'N° de Denuncias'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Cantidad De Denuncias Registradas: <b>{point.y:f}</b>'
        },
        series: [{
            name: 'Population',
            data: [
                @foreach($consultas as $consulta)
                ['{{$consulta->tipoIncidente}}', {{$consulta->incidentes}}],
                @endforeach
            ],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
 
{!! Html::script('graficas/js/highcharts.js') !!}
{!! Html::script('graficas/js/modules/exporting.js') !!}
{!! Html::script('graficas/js/highcharts-3d.js') !!}


<div class="container col-10  mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-body">
                    <div id="container" ></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection