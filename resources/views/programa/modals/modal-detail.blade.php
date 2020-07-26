<div class="modal fade" id="modal-detail-programa-{{$programa->id }}" class=" btnDetallePrograma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detalle Programa</h4>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Etapa</th>
                  <th>Fecha de inicio</th>
                  <th>Fecha de fin</th>
                  <th>Área</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <th>Nombre</th>
                  <th>Fecha de inicio</th>
                  <th>Fecha de fin</th>
                  <th>Área</th>
                  <th>Estado</th>   
                  </tr>                 
                </tfoot>
            </table>
            <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  <!-- /.modal -->
</div>