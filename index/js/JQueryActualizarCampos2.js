$(document).ready(function() {
    $('#imprimir').hover(function() {
        var NombreSolicitante = $('#NombreSolicitante').attr('value');
        var Propietario = $('#Propietario').attr('value');
        var Ciudad = $('#Ciudad').attr('value');
        var Direccion = $('#Direccion').attr('value');
        var Zona = $('#Zona').attr('value');
        var Urbanizacion = $('#Urbanizacion').attr('value');
        var Manzana = $('#Manzana').attr('value');
        var Lote = $('#Lote').attr('value');
        var Testimonio = $('#Testimonio').attr('value');
        var Folioreal = $('#Folioreal').attr('value');
        var CODIGOCATASTRAL = $('#CODIGOCATASTRAL').attr('value');
        var ULTIMOIMPUESTO = $('#ULTIMOIMPUESTO').attr('value');
        var OBSERVACIONES2 = $('#OBSERVACIONES2').attr('value');
        var codAvaluo = $('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen 
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar2.php?NombreSolicitante=" + NombreSolicitante + "&Propietario=" + Propietario + "&Ciudad=" + Ciudad + "&Zona=" + Zona + "&Urbanizacion=" + Urbanizacion + "&Manzana=" + Manzana + "&Lote=" + Lote + "&Testimonio=" + Testimonio + "&Folioreal=" + Folioreal + "&CODIGOCATASTRAL=" + CODIGOCATASTRAL + "&ULTIMOIMPUESTO=" + ULTIMOIMPUESTO + "&Direccion=" + Direccion + "&OBSERVACIONES2=" + OBSERVACIONES2 + "&codAvaluo=" + codAvaluo,
            //valos que se le para a el script

            //mensage que devolvera la funcion
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
            }
        });

    });

}) 