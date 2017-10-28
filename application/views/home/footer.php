    </div>
</div>
    <!-- jQuery CDN -->
    <script src="<?= base_url() ?>js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>

    <!--No tocar-->
    <?php if($this->uri->segment(1)=='tipo_personas') {?>
      <script src="<?= base_url() ?>js/tipo_personas.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='clientes') {?>
      <script src="<?= base_url() ?>js/clientes.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='area') {?>
      <script src="<?= base_url() ?>js/area.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='cargo') {?>
      <script src="<?= base_url() ?>js/cargo.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='producto_1') {?>
      <script src="<?= base_url() ?>js/producto_1.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='tipo_productos') {?>
      <script src="<?= base_url() ?>js/tipo_productos.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='caja') {?>
      <script src="<?= base_url() ?>js/caja.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='empleados') {?>
      <script src="<?= base_url() ?>js/empleados.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='tipo_habitaciones') {?>
      <script src="<?= base_url() ?>js/tipo_habitaciones.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='tipo_movimiento') {?>
      <script src="<?= base_url() ?>js/tipo_movimiento.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='ubigeo') {?>
      <script src="<?= base_url() ?>js/ubigeo.js"></script>
    <?php };?>
    <?php if($this->uri->segment(1)=='habitaciones_sub') {?>
      <script src="<?= base_url() ?>js/habitaciones_sub.js"></script>
    <?php };?>
    <script type="text/javascript">
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            $(this).toggleClass('active');
        });
    </script>
</body>

</html>
