<div class="modal fade" id="modal-store-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Registrar Usuario</h4>
            </div>
            <form method="POST" action="{{route('administrador.usuario.store')}}">
                @csrf
            <div class="modal-body">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="inputName">Nombres y apellidos: </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre y apellidos del usuario">
                                
                                <label for="inputEmail">Email: </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese correo electrónico">
  
                                <label for="inputName">Tipo de usuario: </label>
                                <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                                  @foreach ($tipo_usuarios as $tipo_usuario)
                                <option value="{{$tipo_usuario->id}}"> {{$tipo_usuario->descripcion}}</option>
                                  @endforeach
                                  <option></option>
                                </select>

                                <label for="inputPassword">Contraseña: </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña">
                              

                              </div>
                            </div>
                            <!-- /.box-body -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      <!-- /.modal -->
</div>