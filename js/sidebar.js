$(function() {
    var offset = $("#sbar").offset();
    var topPadding = 15;
    $(window).scroll(function() {
        if ($("#sbar").height() < $(window).height() && $(window).scrollTop() > offset.top) { /* LINEA MODIFICADA POR ALEX PARA NO ANIMAR SI EL SIDEBAR ES MAYOR AL TAMANO DE PANTALLA */
            $("#sbar").stop().animate({
                marginTop: $(window).scrollTop() - offset.top + topPadding
            });
        } else {
            $("#sbar").stop().animate({
            marginTop: 0
            });
        };
    });
});