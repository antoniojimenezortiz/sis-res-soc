@extends('layouts.layout')
@section('content')
<section class="content-header">
    <h1>Lista de Tipos de usuario</h1>
    </section>
      
      <!-- Main content -->
    <section class="content">
            <div class="box">
                    <div class="box-header">
                      <div class="row">
                        <div class="col-md-4"></div>  
                       <div class="col-md-4">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-store-tipo-usuario">Registrar</button> 
                        </div> 
                      </div>
                            @include('usuario.tipo_usuario.modals.modal-store')
                            
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tipo_usuarios as $tipo_usuario)
                        <tr>
                          <td>{{$tipo_usuario->descripcion}}</td>
                          <td>{{$tipo_usuario->estado}}</td>
                        <td class="row"> 
                            <a href=" #"><button data-toggle="modal" data-target="#modal-edit-tipo-usuario-{{$tipo_usuario->id}}" class="btn btn-info ">Editar</button></a>
                              @include('usuario.tipo_usuario.modals.modal-edit')
                            
                            <form action="{{route('administrador.tipo_usuario.destroy',$tipo_usuario->id)}}" method="post">
                              @csrf
                              <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>					   
                        </td>
				                </tr>
{{-- 				        <div class="modal fade" id="modal-editar-usuario_{{$usuario->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			            @include('usuario.modals.modal-editar-usuario') --}}
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Descripción</th>
                          <th>Estado</th>
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
