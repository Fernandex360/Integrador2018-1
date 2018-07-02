@extends('layouts.admin')
@section('contenido')
<div class="container-fluid col-11 mr-3">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header"><h4 class="text-center h5">Lista de Usuarios </h4></div>
                <div class="card-body ">
                
                    <table class="table table-striped table-hover" id="tabla">
                        <thead>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Correo</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Registrado</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->tipo}}</td>
                                  <td><img src="{{ asset($user->avatar) }}" width="100px"></td>
                                  <td>{{$user->provider}}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">ADVERTENCIA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    ¿Estas seguro de eliminar este usuario?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <input name="_method" type="hidden" value="DELETE">

                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

@endsection