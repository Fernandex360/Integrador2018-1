@extends('layouts.admin')
@section('contenido')
<div class="container-fluid col-11 mr-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header"><h4 class="text-center h5">Lista de Evidencias</h4></div>
                <div class="card-body col-md-12 ">
					<div class="container-fluid">
						<div class="row d-flex align-items-center" id="mostrar">
							<img src="{{ asset('evidencias/1530307896Captura de pantalla de 2018-06-08 22-19-11.png') }}" alt="" class="rounded-0 col-md-3 mt-3">
							<img src="{{ asset('evidencias/1530319698Captura de pantalla de 2018-06-28 22-39-25.png') }}" alt="" class="rounded-0 col-md-3 mt-3">
							<img src="{{ asset('evidencias/1530307896Captura de pantalla de 2018-06-08 22-19-11.png') }}" alt="" class="rounded-0 col-md-3 mt-3">
							<img src="{{ asset('evidencias/1530307896Captura de pantalla de 2018-06-08 22-19-11.png') }}" alt="" class="rounded-0 col-md-3 mt-3">

							
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Usuario ::::::</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         	<img src="{{ asset('evidencias/1530307896Captura de pantalla de 2018-06-08 22-19-11.png') }}" alt="" class="rounded-0 col-md-12" id="panel">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
$('#mostrar img').click(function (){
	
	src= $(this).attr('src');
	$("#panel").attr("src",src);

	$('#myModal').modal('show'); 
});
</script>
@endsection