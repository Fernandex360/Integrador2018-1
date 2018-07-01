@extends('layouts.admin')
@section('contenido')
<div class="container-fluid col-11 mr-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
              <div class="card-header"><h4 class="text-center h5">Lista de Denuncias Realizadas</h4></div>
                <div class="card-body ">
                    <table class="table table-striped table-hover" id="tabla">
                        <thead>
                            <th class="text-center">N°</th>
                            <th class="text-center">Denunciante</th>
                            <th class="text-center">Tipo de Incidente</th>
                            <th class="text-center">Fecha del Inicidente</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Distrito</th>
                            <th class="text-center">Evidencia</th>                   
                            <th class="text-center">Eliminar</th>   
                        </thead>
                        <tbody id="mostrar">
                          @foreach($denuncias as $denuncia)
                           <tr>
                             <td>{{$denuncia->id}}</td>
                             <td>{{$denuncia->id_denunciante}}</td>
                             <td>{{$denuncia->tipoIncidente}}</td>
                             <td>{{date_format(date_create($denuncia->fecha), 'd-m-Y')}}</td>
                             <td>{{$denuncia->descripcion}}</td>
                             <td>{{$denuncia->id_distrito}}</td>
                             <td><img src="{{ asset('evidencias/'.$denuncia->evidencia) }}" width="100px"></td>
                             <td><button class="btn btn-danger btn-sm">Eliminar</button></td>
                           </tr>
                          @endforeach 
                        </tbody>
                    </table>
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