$(document).ready(function() {
    $('#imprimir').hover(function() {
        var SuperficieConstruida10 = '';
        var ValorcomercialporMTconstruido10 = '';
        var FactordeDepreciacion10 = '';
        var VALORTOTALDELACONSTRUCCION10 = '';
        var VALORTOTALCOMERCIALDELACONSTRUCCION10 = $('#VALORTOTALCOMERCIALDELTERRENO10').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar11.php?SuperficieConstruida10=" + SuperficieConstruida10 + "&ValorcomercialporMTconstruido10=" + ValorcomercialporMTconstruido10 + "&FactordeDepreciacion10=" + FactordeDepreciacion10 + "&VALORTOTALDELACONSTRUCCION10=" + VALORTOTALDELACONSTRUCCION10 + "&VALORTOTALCOMERCIALDELTERRENO10=" + VALORTOTALCOMERCIALDELACONSTRUCCION10 + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 