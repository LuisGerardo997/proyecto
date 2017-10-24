<div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-header">
      <br/>
      <br/>
      <p class="text-center"> <img src="<?= base_url() ?>images/Rio.png"></p>
      <br/>
      <div class="text-center">Panel de filtrado</div>
      <form class="form-horizontal" action="" method="post">
        <br>
        <br>
        <div class="col-sm-3">Buscar:</div>
        <div class="col-sm-9">
          <input class="form-control" placeholder="Buscar..." name="buscar" id="buscar" />
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
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img src="<?=base_url() ?>images/Rio.png">
        </div>
        <div class="modal-body">
          <div class="text-center">
          <h3 class="modal-title" id="myModalLabel">Registro de Clientes</h3>
        </div>
      </br>
      </br>
          <form class="form text-center" action='<?= base_url() ?>clientes/guardar' method="post" id="form">
            <div class="form-group col-sm-4">
              <label for="nombre">DNI</label>
              <input type="number" class="form-control" placeholder="Numerico" name="dni"/>
            </div>
            <div class="form-group col-sm-4">
              <label for="nombre">Nombres</label>
              <input type="text" class="form-control" placeholder="(S/.)" name="nombres"/>
            </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Apellido paterno</label>
            <input type="text" class="form-control" placeholder="" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Apellido materno</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Género</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Tipo de persona</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Ciudad nacimiento</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Ciudad de residencia</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Cuenta bancaria</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Entidad bancaria</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Email</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Dirección</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Telefono móvil</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
          </div>
          <div class="form-group col-sm-4">
            <label for="nombre">Telefono fijo</label>
            <input type="text" class="form-control" placeholder="apellidos" name="apellidos"/>
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
