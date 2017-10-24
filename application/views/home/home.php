<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Residencial Río</title>
    <link rel="icon" href="<?=base_url() ?>images/logo1.ico">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>css/custom.css" rel="stylesheet/css/custom.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" style="overflow:auto;">
            <div class="sidebar-header">
                <p class="text-center"><?php $cargo ?></p>
                <div style="text-align:center;"><img class="img-circle" style="border: solid white 1px;" src="<?= base_url() ?>images/prrito.jpg">
                    <figcaption>
                        <a href="#">
                            <p style="color:white;">Luis Gerardo</p>
                        </a>
                    </figcaption>
                </div>
            </div>
            <ul class="list-unstyled components">
                <p style="text-align:center;"> Módulos de Control</p>
                <li> <a href="<?= base_url() ?>home">Inicio</a></li>
                <li> <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Mantenimiento</a><ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="<?= base_url() ?>mantenimiento/personas"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;</span>Personas</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/habitaciones"><span class="glyphicon glyphicon-bed" aria-hidden="true">&nbsp;</span>Habitaciones</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/ubigeo"><span class="glyphicon glyphicon-globe" aria-hidden="true">&nbsp;</span>Ubigeo</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/area"><span class="glyphicon glyphicon-th-large" aria-hidden="true">&nbsp;</span>Área</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/cargo"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp;</span>Cargo</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/proveedores"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">&nbsp;</span>Proveedores</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/productos"><span class="glyphicon glyphicon-apple" aria-hidden="true">&nbsp;</span>Productos</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/servicios"><span class="glyphicon glyphicon-tags" aria-hidden="true">&nbsp;</span>Servicios</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/tipo_pago"><span class="glyphicon glyphicon-credit-card" aria-hidden="true">&nbsp;</span>Tipos de Pago</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/tipo_movimiento"><span class="glyphicon glyphicon-refresh" aria-hidden="true">&nbsp;</span>Tipos de Movimiento</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/tipo_documento"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">&nbsp;</span>Tipos de Documento</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/caja"><span class="glyphicon glyphicon-usd" aria-hidden="true">&nbsp;</span>Caja</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/tipo_transaccion"><span class="glyphicon glyphicon-sort" aria-hidden="true">&nbsp;</span>Tipos de Transacción</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/ofertas"><span class="glyphicon glyphicon-gift" aria-hidden="true">&nbsp;</span>Ofertas</a></li>
                        <li><a href="<?= base_url() ?>mantenimiento/parametros"><span class="glyphicon glyphicon-plus" aria-hidden="true">&nbsp;</span>Parámetros</a></li>
                    </ul>
                </li>
                <li> <a href="#">Habitaciones</a></li>
                <li> <a href="#">Almacén</a> </li>
                <li> <a href="#">Reportes</a> </li>
                <hr>
                <a href="<?= base_url() ?>login/cerrar_sesion"><span class="glyphicon glyphicon-log-out" aria-hidden="true">Cerrar Sesión</span></a>
            </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn"> <span></span> <span></span> <span></span> </button>
                    </div>
                        <div class="col-md-10 text-center">
                            <h3>Residencial Río</h3>
                        </div>
                </div>
            </nav>
