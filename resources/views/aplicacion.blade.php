@extends('layouts.app')
@section('titulo','Aplicacion')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4>Fecha :</h4>
            <h4>Lugar :</h4>
            <h4>Descripcion :</h4>
        </div>
    </div>
</div>

<script type="text/javascript">
    var longitud;
    var latitud;
	if ("geolocation" in navigator){    
    navigator.geolocation.getCurrentPosition(function(position){ 
            latitud=position.coords.latitude;
            longitud=position.coords.longitude;
            console.log(latitud +" "+longitud);
        });
	}else{
    console.log("tu navegador no tiene Geolocalizacion");
	}
</script>
@endsection