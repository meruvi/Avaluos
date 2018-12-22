$(document).ready(function() {
    $('#imprimir').hover(function() {
        $('#imagen').html('<img src="temas/ban/images/gif_cargando.gif" width="130" height="35" border="0" title="Imprimir Avaluo">');
        var VALORCOMERCIALTOTALESSUS=$('#VALORCOMERCIALTOTALESSUS').attr('value');
        var VALORHIPOTECARIOTOTALESSUS=$('#VALORHIPOTECARIOTOTALESSUS').attr('value');
        var VALORCATASTRALTOTALESSUS=$('#VALORCATASTRALTOTALESSUS').attr('value');
        var VALORLIQUIDACIONTOTALESSUS=$('#VALORLIQUIDACIONTOTALESSUS').attr('value');
        var codAvaluo=$('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizar17.php?VALORCOMERCIALTOTALESSUS="+VALORCOMERCIALTOTALESSUS+"&VALORHIPOTECARIOTOTALESSUS="+VALORHIPOTECARIOTOTALESSUS+"&VALORCATASTRALTOTALESSUS="+VALORCATASTRALTOTALESSUS+"&VALORLIQUIDACIONTOTALESSUS="+VALORLIQUIDACIONTOTALESSUS+"&codAvaluo="+codAvaluo,
            //valos que se le para a el script
				
            //mensage que devolvera la funcion
            success: function(data){
                $('#Info').fadeIn(1000).html(data);
                $('#imagen').html('<img src="temas/ban/images/doc_pdf2.png" width="30" height="35" title="Imprimir Avaluo">');
            }
        });
       
    });

}) 