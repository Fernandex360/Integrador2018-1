@extends('layouts.admin')
@section('content')
<div class="row">
<div class="col-md-12">

 <div class="row justify-content-start"><h3><b>Lista de Denuncias</b></h3></div>
 <form action="{{route('administrador.index')}}" method="GET" >
 <div class="row justify-content-end">

 <input name="tipoIncidente" type="text"  placeholder="Buscar denuncia por incidentes" size="30%"> 
 <button class="btn btn-info" style="margin-right:2%;"><span><i class="fas fa-search" aria-hidden="true"></i></span></button>
 <button class="btn btn-primary" ><span> Ver Todo<i class="far fa-eye" aria-hidden="true"></i></span></button></div>

 </form>
 <table id="mytable" class="table table-hover">
 <thead>
 <th>ID</th>
 <th>Incidentes</th>
 <th>Fecha</th>
 <th>Descripción</th>
 <th>Nombre de la Evidencia</th>
 <th>Latitud</th>
 <th>Longitud</th>
 <th>ID_Denunciante</th>
 <th>Denuncia Realizada</th>
 <th>Eliminar</th>
 </thead>
 <tbody>
 @if($denuncias->count())
 @foreach($denuncias as $denuncia)
 <tr>
 <td>{{$denuncia->id}}</td>
 <td>{{$denuncia->tipoIncidente}}</td>
 <td>{{$denuncia->fecha}}</td>
 <td>{{$denuncia->descripcion}}</td>
 <td>{{$denuncia->evidencia}}</td>
 <td>{{$denuncia->latitud}}</td>
 <td>{{$denuncia->longitud}}</td>
 <td>{{$denuncia->id_denunciante}}</td>
 <td>{{$denuncia->created_at}}</td>
 <td>
 <form action="{{action('AdminController@destroy', $denuncia->id)}}" method="post">
 {{csrf_field()}}
 <input name="_method" type="hidden" value="DELETE">
 <button  type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalCenter"><span > <i class="fas fa-trash-alt"></i></span></button>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Advertencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ¿Desea eliminar este registro realmente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="8">No existen registros de denuncias !!</td>
 </tr>
 @endif
 </tbody>
 </table>

 {{ $denuncias->links() }}
</div>
</div>
@endsection