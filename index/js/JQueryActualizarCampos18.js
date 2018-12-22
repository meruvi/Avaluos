$(document).ready(function() {
    $('#imprimir').hover(function() {
        $('#imagen').html('<img src="temas/ban/images/gif_cargando.gif" width="130" height="35" border="0" title="Imprimir Avaluo">');
        $('#Info2').fadeIn(1000).html("Actualizando Datos");
        var VALORCOMERCIALTOTALESBS=$('#VALORCOMERCIALTOTALESBS').attr('value');
        var VALORHIPOTECARIOTOTALESBS=$('#VALORHIPOTECARIOTOTALESBS').attr('value');
        var VALORCATASTRALTOTALESBS=$('#VALORCATASTRALTOTALESBS').attr('value');
        var VALORLIQUIDACIONTOTALESBS=$('#VALORLIQUIDACIONTOTALESBS').attr('value');
        var codAvaluo=$('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar18.php?VALORCOMERCIALTOTALESBS="+VALORCOMERCIALTOTALESBS+"&VALORHIPOTECARIOTOTALESBS="+VALORHIPOTECARIOTOTALESBS+"&VALORCATASTRALTOTALESBS="+VALORCATASTRALTOTALESBS+"&VALORLIQUIDACIONTOTALESBS="+VALORLIQUIDACIONTOTALESBS+"&codAvaluo="+codAvaluo,
            //valos que se le para a el script
				
            //mensage que devolvera la funcion
            success: function(data){
                $('#Info').fadeIn(1000).html(data);
                $('#imagen').html('<img src="temas/ban/images/doc_pdf2.png" width="30" height="35" title="Imprimir Avaluo">');
            }
        });
       
    });

}) 