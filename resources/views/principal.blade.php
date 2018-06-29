@extends('layouts.app')
@section('content')

<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container buscar">
	<div class="row">
		<div class="col">
			<form>
				<input type="text"  name="">
			</form>
		</div>
	</div>
</div>
 <div class="mapa" style="height:90vh ">{!! Mapper::render()!!}</div>

 <style type="text/css">
 	.buscar{
 		position: fixed;
 		z-index: 100;
 	}
 	.mapa{
 		z-index: -100
 	}

 </style>
@endsection
