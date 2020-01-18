@extends('layouts.layout')
@section('content')
<section class="content-header">
    <h1>Programas</h1>
    </section>
      
      <!-- Main content -->
    <section class="content">
            <div class="box">
                    <div class="box-header">
                      <div class="row">
                        <div class="col-md-4"></div>  
                       <div class="col-md-4">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-store-programa">Registrar</button> 
                        </div> 
                      </div>
                            {{-- @include('programa.modals.modal-store') --}}
                            
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Año</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($programas as $programa)
                        <tr>
                          <td>{{$programa->anio}}</td>
                          <td>{{$programa->estado}}</td>
                        <td class="row"> 
{{--                              <a href=" #"><button data-toggle="modal" data-target="#modal-edit-programa-{{$programa->id}}" class="btn btn-info ">Editar</button></a>
 --}} {{--                             @include('facultad.modals.modal-edit')
                            
                            <form action="{{route('administrador.facultad.destroy',$facultad->id)}}" method="post">
                              @csrf
                              <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>	 --}}		    
                        </td>
				                </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Nombre</th>
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
