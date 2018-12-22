$(document).ready(function() {
    $('#imprimir').hover(function() {
        var VALORDELTERRENOINMUEBLE = $('#VALORDELTERRENOINMUEBLE').attr('value');
        var VALORDELTERRENOSUPERFICIEINMUEBLE = $('#VALORDELTERRENOSUPERFICIEINMUEBLE').attr('value');
        var VALORDELTERRENOTOTALINMUEBLE = $('#VALORDELTERRENOTOTALINMUEBLE').attr('value');
        var VALORDELACONSTRUCCIONINMUEBLE = '';
        var VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE = '';
        var VALORDELACONSTRUCCIONTOTALINMUEBLE = '';
        var VALORCATASTRALTOTALBS = $('#VALORCATASTRALTOTALBS').attr('value');
        var VALORCATASTRALTOTALSUS = $('#VALORCATASTRALTOTALSUS').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar14.php?VALORDELTERRENOINMUEBLE=" + VALORDELTERRENOINMUEBLE + "&VALORDELTERRENOSUPERFICIEINMUEBLE=" + VALORDELTERRENOSUPERFICIEINMUEBLE + "&VALORDELTERRENOTOTALINMUEBLE=" + VALORDELTERRENOTOTALINMUEBLE + "&VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE=" + VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE + "&VALORDELACONSTRUCCIONTOTALINMUEBLE=" + VALORDELACONSTRUCCIONTOTALINMUEBLE + "&VALORCATASTRALTOTALBS=" + VALORCATASTRALTOTALBS + "&VALORDELACONSTRUCCIONINMUEBLE=" + VALORDELACONSTRUCCIONINMUEBLE + "&VALORCATASTRALTOTALSUS=" + VALORCATASTRALTOTALSUS + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 