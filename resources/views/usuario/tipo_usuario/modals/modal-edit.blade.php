<div class="modal fade" id="modal-edit-tipo-usuario-{{$tipo_usuario->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Tipo Usuario</h4>
        </div>
        <form method="POST" action="{{route('administrador.tipo_usuario.update')}}">
            @csrf
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
                        <label for="inputDescripcion">Descripción</label>
                            <input type="text" class="form-control" id="id" name="id"
                            value="{{$tipo_usuario->id}}" enabled="false">
                        <label for="inputDescripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripción" 
                            value="{{$tipo_usuario->descripcion}}">
                            
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