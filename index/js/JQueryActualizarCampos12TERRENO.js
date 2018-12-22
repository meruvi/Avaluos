$(document).ready(function() {
    $('#imprimir').hover(function() {
        var VALORDELTERRENO11 = $('#VALORDELTERRENO11').attr('value');
        var VALORDELTERRENOSUPERFICIE11 = $('#VALORDELTERRENOSUPERFICIE11').attr('value');
        var VALORDELTERRENOTOTAL11 = $('#VALORDELTERRENOTOTAL11').attr('value');
        var VALORDELACONSTRUCCION11 = '';
        var VALORDELACONSTRUCCIONSUPERFICIE11 = '';
        var VALORDELACONSTRUCCIONTOTAL11 = '';
        var VALORCOMERCIALTOTAL11 = $('#VALORCOMERCIALTOTAL11').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar12.php?VALORDELTERRENO11=" + VALORDELTERRENO11 + "&VALORDELTERRENOSUPERFICIE11=" + VALORDELTERRENOSUPERFICIE11 + "&VALORDELTERRENOTOTAL11=" + VALORDELTERRENOTOTAL11 + "&VALORDELACONSTRUCCIONSUPERFICIE11=" + VALORDELACONSTRUCCIONSUPERFICIE11 + "&VALORDELACONSTRUCCIONTOTAL11=" + VALORDELACONSTRUCCIONTOTAL11 + "&VALORCOMERCIALTOTAL11=" + VALORCOMERCIALTOTAL11 + "&VALORDELACONSTRUCCION11=" + VALORDELACONSTRUCCION11 + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 