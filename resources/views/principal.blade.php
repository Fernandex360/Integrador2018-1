@extends('layouts.app')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script> 

<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container buscar">
	<div class="row">
		<div class="col-md-12 barra">
			 <div class="form-row">
				 <form action="{{route('inicio')}}" class="col-md-4">
				 	<input type="text" name="buscar" id="buscar" class="" >
	                <input type="submit" name="btn-enviar" value="Buscar" class="btn-eliminar btn btn-danger btn-sm">
				 </form>
				 <form action="{{route('inicio')}}" class="col-md-2">
				 	<input type="text" name="longitud" id="longitud" class="d-none" >
					<input type="text" name="latitud" id="latitud" class="d-none" >
	                <input type="submit" name="btn-enviar" value="Localizar" class="btn-eliminar btn btn-danger btn-sm">
				 </form>
			 </div>
		</div>
	</div>
</div>
 <div class="mapa" style="height:90vh ">{!! Mapper::render()!!}</div>

 <style type="text/css">
	.buscar{
		position: fixed;
		z-index: 10;
	} 	

 </style>


 <script type="text/javascript">
 	$(document).ready(function(){
 	var longitud;
    var latitud;
	if ("geolocation" in navigator){    
    navigator.geolocation.getCurrentPosition(function(position){ 
            latitud=position.coords.latitude;
            longitud=position.coords.longitude;
            document.getElementById('latitud').value=latitud;
            document.getElementById('longitud').value=longitud;

            console.log(latitud +" "+longitud);
    });

	}else{
    console.log("tu navegador no tiene Geolocalizacion");
	}

});
 </script>
@endsection

