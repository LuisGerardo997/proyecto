    </div>
</div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/tipo_personas.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").niceScroll({
                cursorcolor: '#53619d'
                , cursorwidth: 4
                , cursorborder: 'none'
            });
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            $(this).toggleClass('active');
        });
    </script>
</body>

</html>
