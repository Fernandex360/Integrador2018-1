@extends('layouts.app')
@section('content')
<div>Aplicacion</div>

<script type="text/javascript">
	if ("geolocation" in navigator){ //check Geolocation available 
    //things to do
	}else{
    console.log("Geolocation not available!");

	}

	if ("geolocation" in navigator){ //check geolocation available 
    //try to get user current location using getCurrentPosition() method
    navigator.geolocation.getCurrentPosition(function(position){ 
            console.log("Found your location nLat : "+position.coords.latitude+" nLang :"+ position.coords.longitude);
        });
	}else{
    console.log("Browser doesn't support geolocation!");
	}
</script>
@endsection