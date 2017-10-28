
<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-header">
      <br/>
      <br/>
      <p class="text-center"> <img src="<?= base_url() ?>images/Rio.png"></p>
      <br/>
      <div class="text-center">Panel de filtrado</div>
      <form class="form-horizontal" action="" method="post" id="form_actualizar">
        <br>
        <br>
        <div class="text-center">
        <div class="col-sm-6">
          <label for="habitacion_e">Habitación</label>
          <input class="form-control" type="number" name="habitacion_e" id="habitacion_e" />
          <input class="form-control" type="hidden" name="idselect" id="idselect" />
        </div>
        <div class="col-sm-6">
          <label for="nombre">Tipo</label>
          <select name='tipo' id="tipo" class="form-control">
          <option value=""></option>
          <?php foreach($registro as $fila):?>
            <option value='<?= $fila['cod_tipo_habitacion'] ?>'><?= $fila['tipo_habitacion'] ?></option>
          <?php endforeach; ?>
        </select>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-sm-6 col-sm-offset-3">
          <label for="piso_e">Piso</label>
          <input class="form-control" type="number" name="piso_e" id="piso_e" />
        </div>
        </div>
      </form>
    </br>
    </br>
  </br>
</br>
<div class="panel-footer text-center">
<div class="btn-group">
    <p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</button>
      <button type="button" class="btn btn-primary" id="actualizar"><spam class="glyphicon glyphicon-refresh" aria-hidden="true"></spam> Actualizar</button>
    </p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-8">
  <div class="panel panel-default" id="listatipo_h">

  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img src="<?=base_url() ?>images/Rio.png">
      </div>
      <div class="modal-body">
        <div class="text-center">
        <h3 class="modal-title" id="myModalLabel">Registro de Habitaciones</h3>
      </div>
    </br>
    </br>
        <form class="form text-center" action='<?= base_url() ?>habitaciones_sub/guardar' method="post" id="form">
          <div class="form-group col-sm-5 col-sm-offset-1">
            <label for="nombre">Habitación</label>
              <input type="number" class="form-control" placeholder="Habitaciones" name="habitacion"/>
          </div>
          <div class="form-group col-sm-5">
            <label for="nombre">Tipo de habitación</label>
            <select name='tipo' class="form-control">
            <option value=""></option>
            <?php foreach($registro as $fila):?>
              <option value='<?= $fila['cod_tipo_habitacion'] ?>'><?= $fila['tipo_habitacion'] ?></option>
            <?php endforeach; ?>
          </select>
          </div>
        <div class="form-group col-sm-6 col-sm-offset-3">
          <label for="nombre">Piso</label>
          <input type="number" class="form-control" placeholder="Piso" name="piso"/>
        </div>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
    </div>
    <div class="modal-footer">
      <div class="text-center">
      <button type="button" class="btn btn-primary" id="enviar">Guardar</button>
    </div>
  </form>
  </br>
    </div>
  </div>
</div>
</div>
