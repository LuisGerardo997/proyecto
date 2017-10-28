
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
        <h3 class="modal-title" id="myModalLabel">Registro de Productos</h3>
      </div>
    </br>
    </br>
        <form class="form text-center" action='<?= base_url() ?>tipo_productos/guardar' method="post" id="form">
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Cod_Productos</label>
            <input type="number" class="form-control" placeholder="Cod_Productos" id="Cod_Productos" name="Cod_Productos"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
                <label for="fff">Cod_Marca</label>
                <select class="form-control" name="Cod_Marca">
                    <option value="">aodhas</option>
                    <option value="">aodhas</option>
                </select>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
                <label for="fff">Cod_Tipo_Producto</label>
                <select class="form-control" name="Cod_Tipo_Producto">
                    <option value="">aodhas</option>
                    <option value="">aodhas</option>
                </select>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Producto</label>
            <input type="text" class="form-control" placeholder="Producto" id="Producto" name="Producto"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Descripcion</label>
            <input type="text" class="form-control" placeholder="Descripcion" id="Descripcion" name="Descripcion"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Precio_Producto</label>
            <input type="number" class="form-control" placeholder="Precio_Producto" id="Precio_Producto" name="Precio_Producto"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Stock_Producto</label>
            <input type="number" class="form-control" placeholder="Stock_Producto" id="Stock_Producto" name="Stock_Producto"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Stock_Minimo</label>
            <input type="number" class="form-control" placeholder="Stock_Minimo" id="Stock_Minimo" name="Stock_Minimo"/>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-0">
            <label for="tipo">Stock_Máximo</label>
            <input type="number" class="form-control" placeholder="Stock_Máximo" id="Stock_Máximo" name="Stock_Máximo"/>
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
    <br/>
      <br/>
      <br/>
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
