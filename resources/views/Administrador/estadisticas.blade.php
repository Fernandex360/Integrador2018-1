@extends('layouts.admin')
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
                ['Cercado de Lima', 23],
                ['Ate', 16],
                ['Breña', 14],
                ['Barranco', 14],
                ['El Agustino', 12],
                ['Chorrillos', 12],
                ['Jesús María', 11],
                ['Comas', 11],
                ['La Victoria', 11],
                ['La Molina', 11],
                ['Lince', 10],
                ['Magdalena del Mar', 10],
                ['Miraflores', 10],
                ['Pueblo Libre', 9],
                ['Puente Piedra', 10],
                ['Rimac', 11],
                ['Independencia', 15],
                ['San Isidro', 5],
                ['San Juan de Miraflores',14]
                ['San Luis', 14],
                ['San Martin de Porres',10],
                ['San Miguel', 15],
                ['Santiago de Surco', 14],
                ['Surquillo', 14]
                ['Villa María del Triunfo', 14],
                ['San Juan de Lurigancho', 15],
                ['Santa Rosa', 15],
                ['Los Olivos', 13],
                ['Santa Anita', 20],
                ['San Borja',12],
                ['Independencia', 16],  
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
    </head>
    <body>
<script src="graficas/js/highcharts.js"></script>
<script src="graficas/js/modules/exporting.js"></script>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>


@endsection