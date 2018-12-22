$(document).ready(function() {
    $('#imprimir').hover(function() {
        var TipoDeInmueble = $('#TipoDeInmueble').attr('value');
        var FactordeinclinacionP = $('#FactordeinclinacionP').attr('value');
        var FactordeformaP = $('#FactordeformaP').attr('value');
        var FactordeComerciabilidadP = $('#FactordeComerciabilidadP').attr('value');
        var SuperficiedelLote2 = $('#SuperficiedelLote2').attr('value');
        var SuperficieConstruida2 = $('#SuperficieConstruida2').attr('value');
        var ValorImpositivopormetrocuadrado = $('#ValorImpositivopormetrocuadrado').attr('value');
        var ValorcomercialporMT2P = $('#ValorcomercialporMT2P').attr('value');
        var ValorcomercialporMT2ConstrP = $('#ValorcomercialporMT2ConstrP').attr('value');
        var ValorcatastralpormetrocuadradoconstruidoP = $('#ValorcatastralpormetrocuadradoconstruidoP').attr('value');
        var Anosdevida = $('#Anosdevida').attr('value');
        var TIPOCAMBIO = $('#TIPOCAMBIO').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar.php?TipoDeInmueble=" + TipoDeInmueble + "&FactordeinclinacionP=" + FactordeinclinacionP + "&FactordeformaP=" + FactordeformaP + "&FactordeComerciabilidadP=" + FactordeComerciabilidadP + "&SuperficiedelLote2=" + SuperficiedelLote2 + "&SuperficieConstruida2=" + SuperficieConstruida2 + "&ValorImpositivopormetrocuadrado=" + ValorImpositivopormetrocuadrado + "&ValorcomercialporMT2P=" + ValorcomercialporMT2P + "&ValorcomercialporMT2ConstrP=" + ValorcomercialporMT2ConstrP + "&ValorcatastralpormetrocuadradoconstruidoP=" + ValorcatastralpormetrocuadradoconstruidoP + "&Anosdevida=" + Anosdevida + "&TIPOCAMBIO=" + TIPOCAMBIO + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 