@extends('layouts.app')
@section('content')
<div>Aplicacion</div>

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