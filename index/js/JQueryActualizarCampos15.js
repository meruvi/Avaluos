$(document).ready(function() {
    $('#imprimir').hover(function() {
        var VALORDELTERRENOLIQUIDACION=$('#VALORDELTERRENOLIQUIDACION').attr('value');
		var VALORDELTERRENOPORCENTAJELIQUIDACION=$('#VALORDELTERRENOPORCENTAJELIQUIDACION').attr('value');
		var VALORDELTERRENOTOTALLIQUIDACION=$('#VALORDELTERRENOTOTALLIQUIDACION').attr('value');
		var VALORDELACONSTRUCCIONLIQUIDACION=$('#VALORDELACONSTRUCCIONLIQUIDACION').attr('value');
		var VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION=$('#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION').attr('value');
		var VALORDELACONSTRUCCIONTOTALLIQUIDACION=$('#VALORDELACONSTRUCCIONTOTALLIQUIDACION').attr('value');
		var VALORLIQUIDACION=$('#VALORLIQUIDACION').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar15.php?VALORDELTERRENOLIQUIDACION="+VALORDELTERRENOLIQUIDACION+"&VALORDELTERRENOPORCENTAJELIQUIDACION="+VALORDELTERRENOPORCENTAJELIQUIDACION+"&VALORDELTERRENOTOTALLIQUIDACION="+VALORDELTERRENOTOTALLIQUIDACION+"&VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION="+VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION+"&VALORDELACONSTRUCCIONTOTALLIQUIDACION="+VALORDELACONSTRUCCIONTOTALLIQUIDACION+"&VALORLIQUIDACION="+VALORLIQUIDACION+"&VALORDELACONSTRUCCIONLIQUIDACION="+VALORDELACONSTRUCCIONLIQUIDACION+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 