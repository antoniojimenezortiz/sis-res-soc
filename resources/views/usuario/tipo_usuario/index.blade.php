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
                          <td>{{$tipo_usuario->estado}}
                          </td>
                        <td>
<<<<<<< HEAD
                            {{-- <a href=" #"><button data-toggle="modal" data-target="#modal-editar-usuario_{{$usuario->id }}" class="btn btn-block btn-info btn-sm" data-id="{{$usuario->id}}" data-usuario="{{ $usuario->username }}">Editar</button></a></td> --}}
                            <form action="{{route('administrador.tipo_usuario.destroy',$tipo_usuario->id)}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="delete">
                              <button class="btn btn-danger" type="submit">Eliminar</button>
                              </form>					   
=======
                            <a href=" #"><button data-toggle="modal" data-target="#modal-delete-tipo-usuario" class="btn btn-block btn-info btn-sm" 
                            data-id="{{$tipo_usuario->id}}" data-usuario="{{ $tipo_usuario->descripcion }}">Eliminar</button></a></td>
                            @include('usuario.tipo_usuario.modals.modal-delete',['id' => $tipo_usuario->descripcion])
                        </td>
                        
                        <td>
                        
					   {{-- <form action="{{route('administrador.tipo_usuario.delete),$usuario->id)}}" method="post">
						@csrf
						<input name="_method" type="hidden" value="DELETE">
						<button class="btn btn-danger" type="submit">Eliminar</button>
						</form>
>>>>>>> 9ab84d9e2ee71ea4498783c55ba11c7a7154b76b
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
