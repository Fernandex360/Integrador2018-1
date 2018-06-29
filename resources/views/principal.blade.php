@extends('layouts.app')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script> 

<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container buscar">
	<div class="row">
		<div class="col">
			 {!! Form::open(['route' => ['inicio'],'method'=>'GET']) !!}
				<input type="text" name="longitud" id="longitud" >
				<input type="text" name="latitud" id="latitud">
                <a href="#" class="btn-eliminar btn btn-danger btn-sm ">Buscar</a>
             {!! Form::close() !!} 
		</div>
	</div>
</div>
 <div class="mapa" style="height:90vh ">{!! Mapper::render()!!}</div>

 <style type="text/css">
 	.buscar{
 		position: fixed;
 		z-index: 100;
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

	$('.btn-eliminar').click(function(e){
		e.preventDefault();
		if(!confirm("Estas seguro de eliminar !!!")){
			return 'false';
		}

		var form=$(this).parents('form');
		var url=form.attr('action');

		$.get(url,form.serialize(),function(result){
			row.fadeOut();
			
		}).fail(function(){

		});

	});
});
 </script>
@endsection
