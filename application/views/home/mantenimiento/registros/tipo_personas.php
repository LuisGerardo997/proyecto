
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
                <br/>
                <br/>
                <br/>
            </form>
        </div>
        <div class="panel-footer text-center">
          <p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Insertar Registro</button>
          </p>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default" id="listatipo">

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
        <h3 class="modal-title" id="myModalLabel">Registro de Tipos de Persona</h3>
      </div>
    </br>
    </br>
        <form class="form text-center" action='<?= base_url() ?>tipo_personas/guardar' method="post" id="form">
          <div class="form-group col-sm-6 col-sm-offset-3">
            <label for="tipo">Tipo de Persona</label>
            <input type="text" class="form-control" placeholder="Tipo de Habitación" id="tipo" name="tipo"/>
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
