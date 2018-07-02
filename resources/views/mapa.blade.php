 {!! Html::style('../bootstrap4/css/bootstrap.min.css') !!}
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container-fluid p-0 buscar">
	<div class="row">
		<div class="col-md-12 barra">
			 <div class="form-row">
				 <form action="{{route('mapa')}}" id="buscar" class="col-md-4">
				 	<input type="text" name="buscar" id="buscar" class="" >
	                <input type="submit" name="btn-enviar" value="Buscar" class="btn-eliminar btn btn-danger btn-sm">
				 </form>
				 <form action="{{route('mapa')}}" id="localizar" class="col-md-2">
				 	<input type="text" name="longitud" id="longitud" class="d-none" >
					<input type="text" name="latitud" id="latitud" class="d-none" >
	                <input type="submit" name="btn-enviar" value="Localizar" class="btn-eliminar btn btn-danger btn-sm">
				 </form>
				  <div style="width:100vw; height: 100vh;">{!! Mapper::render()!!}</div>
			 </div>
		</div>
	</div>
</div>

 <style type="text/css">
	.buscar{
		position: fixed;
		z-index: 10;
	} 	

 </style>


 <script type="text/javascript">
 
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


 </script>

