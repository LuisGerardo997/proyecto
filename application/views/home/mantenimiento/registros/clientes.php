<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-header">
      <br>
      <p class="text-center"> <img src="<?= base_url() ?>images/Rio.png"></p>
      <div class="text-center"><h4>Panel de edicion</h4></div>
      <form class="form-horizontal" action="" method="post">
        <div class="col-sm-9">
          <input class="form-control" placeholder="Buscar..." name="actualizar" id="actualizar" />
        </div>
      </form>
    </br>
    </br>
    </br>
    <div class="panel-footer text-center">
      <p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Insertar Registro</button>
      </p>
    </div>
    </div>
  </div>
</div>
  <div class="col-md-8">
    <div class="panel panel-default" id="listacliente">
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img src="<?=base_url() ?>images/Rio.png">
            <h3 class="modal-title" id="myModalLabel">Registro de Clientes</h3>
        </div>
        <div class="modal-body">
          <form class="form text-center" action='<?= base_url() ?>clientes/guardar' method="post" id="form">
            <div class="form-group col-sm-4">
              <label for="nombre">DNI</label>
              <input type="number" class="form-control" placeholder="Numerico" name="dni"/>
            </div>
            <div class="form-group col-sm-4">
              <label for="nombre">Nombres</label>
              <input type="text" class="form-control" placeholder="Nombres" name="nombres"/>
            </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Apellido paterno</label>
            <input type="text" class="form-control" placeholder="Apellido paterno" name="apellido_p"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Apellido materno</label>
            <input type="text" class="form-control" placeholder="Apellido materno" name="apellido_m"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Género</label>
            <select class="form-control" name="genero">
              <option value=""></option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Tipo de Persona</label>
            <select name='tipo_p' class="form-control">
            <option value="">Tipo Persona</option>
            <?php foreach($tipo_p as $fila):?>
              <option value='<?= $fila["cod_tipo_persona"] ?>'><?= $fila['tipo_persona'] ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Estado Civil</label>
            <select name='ec' class="form-control">
            <option value="5"></option>
            <?php foreach($ec as $fila):?>
              <option value='<?= $fila["cod_estado_civil"] ?>'><?= $fila['estado_civil'] ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Ciudad nacimiento</label>
            <select name='ciudad_n' class="form-control">
              <option value="">Ciudad de Nacimiento</option>
            <?php foreach($ciudad as $fila):?>
              <option value='<?= $fila["cod_ciudad"] ?>'><?= $fila['ciudad'] ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Ciudad de residencia</label>
            <select name='ciudad_r' class="form-control">
              <option value=""></option>
            <?php foreach($ciudad as $fila):?>
              <option value='<?= $fila["cod_ciudad"] ?>'><?= $fila['ciudad'] ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Cuenta bancaria</label>
            <input type="text" class="form-control" placeholder="Cuenta bancaria" name="cuenta_b"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Entidad bancaria</label>
            <input type="text" class="form-control" placeholder="Entidad bancaria" name="entidad_b"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Dirección</label>
            <input type="text" class="form-control" placeholder="Dirección" name="direccion"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Telefono móvil</label>
            <input type="text" class="form-control" placeholder="Telefono móvil" name="tel"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Telefono fijo</label>
            <input type="text" class="form-control" placeholder="Telefono fijo" name="tel_f"/>
          </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
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
