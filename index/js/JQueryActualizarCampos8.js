$(document).ready(function() {
    $('#imprimir').hover(function() {
        var SuperficiedelLote7 = $('#SuperficiedelLote7').attr('value');
        var ValorImpositivopormetrocuadrado7 = $('#ValorImpositivopormetrocuadrado7').attr('value');
        var FactordeInclinacion7 = $('#FactordeInclinacion7').attr('value');
        var FactordeForma7 = $('#FactordeForma7').attr('value');
        var FactordeServicios7 = $('#FactordeServicios7').attr('value');
        var VALORIMPOSITIVOMT2TOTAL7 = $('#VALORIMPOSITIVOMT2TOTAL7').attr('value');
        var VALORCATASTRALTOTALBS7 = $('#VALORCATASTRALTOTALBS7').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar8.php?SuperficiedelLote7=" + SuperficiedelLote7 + "&ValorImpositivopormetrocuadrado7=" + ValorImpositivopormetrocuadrado7 + "&FactordeInclinacion7=" + FactordeInclinacion7 + "&FactordeServicios7=" + FactordeServicios7 + "&VALORIMPOSITIVOMT2TOTAL7=" + VALORIMPOSITIVOMT2TOTAL7 + "&VALORCATASTRALTOTALBS7=" + VALORCATASTRALTOTALBS7 + "&FactordeForma7=" + FactordeForma7 + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 