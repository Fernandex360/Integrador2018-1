@extends('layouts.admin')
@section('contenido')
<div class="container-fluid col-11 mr-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header"><h4 class="text-center h5">Lista de Usuarios </h4></div>
                <div class="card-body ">
                
                    <table class="table table-striped table-hover" id="tabla">
                        <thead>
                            <th class="text-center">N°</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td><img src="{{ asset($user->avatar) }}" width="100px"></td>
                                  <td>{{$user->provider}}</td>
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
@endsection