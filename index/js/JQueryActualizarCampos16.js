$(document).ready(function() {
    $('#imprimir').hover(function() {
        $('#imagen').html('<img src="temas/ban/images/gif_cargando.gif" width="130" height="35" border="0" title="Imprimir Avaluo">');
        var observacionesfinales = $('#observacionesfinales').attr('value');
        var observacionesfinales2 = $('#observacionesfinales2').attr('value');
        var observacionesfinales3 = $('#observacionesfinales3').attr('value');
        var observacionesfinales4 = $('#observacionesfinales4').attr('value');
        var observacionesfinales5 = $('#observacionesfinales5').attr('value');
        var observacionesfinales6 = $('#observacionesfinales6').attr('value');
        var carta = $('#cartas').attr('value');
        var nombre = $('#nombre_carta').attr('value');
        var empresa = $('#empresa_carta').attr('value');
        var titulo = $('#titulo_carta').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar16.php?observacionesfinales=" + observacionesfinales + "&carta=" + carta + "&nombre_carta=" + nombre + "&empresa_carta=" + empresa + "&titulo_carta=" + titulo + "&observacionesfinales2=" + observacionesfinales2 + "&observacionesfinales3=" + observacionesfinales3 + "&observacionesfinales4=" + observacionesfinales4 + "&observacionesfinales5=" + observacionesfinales5 + "&observacionesfinales6=" + observacionesfinales6 + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                $('#imagen').html('<img src="temas/ban/images/doc_pdf2.png" width="30" height="35" title="Imprimir Avaluo">');
            }
        });

    });

}) 