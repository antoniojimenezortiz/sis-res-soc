@extends('layouts.layout')
@section('content')
<section class="content-header">
    <h1>Lista Usuarios</h1>
    </section>
      
      <!-- Main content -->
    <section class="content">
            <div class="box">
                    <div class="box-header">
                      <div class="row">
                        <div class="col-md-4"></div>  
                       <div class="col-md-4">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-store-usuario">Registrar</button> 
                        </div> 
                      </div>
                            @include('usuario.usuario.modals.modal-store')
                            
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Tipo de usuario</th>
                          <th>Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                          <td>{{$usuario->id}}</td>
                          <td>{{$usuario->name}}</td>
                          <td>{{$usuario->email}}</td>
                          <td>{{$usuario->tipo_usuario}}</td>

                        <td class="row"> 
                            <a href=" #"><button data-toggle="modal" data-target="#modal-edit-usuario-{{$usuario->id}}" class="btn btn-info ">Editar</button></a>
                             @include('usuario.usuario.modals.modal-edit')
                            
                            <form action="{{route('administrador.usuario.destroy',$usuario->id)}}" method="post">
                              @csrf
                              <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>				   
                        </td>
				                </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Tipo usuario</th>
                          <th>Acciones</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
    </section>
      <!-- /.content -->
@endsection
