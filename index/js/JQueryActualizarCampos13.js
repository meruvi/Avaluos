$(document).ready(function() {
    $('#imprimir').hover(function() {
        var VALORDELTERRENOHIPOTECARIOH=$('#VALORDELTERRENOHIPOTECARIOH').attr('value');
		var VALORDELTERRENOPORCENTAJEHIPOTECARIO=$('#VALORDELTERRENOPORCENTAJEHIPOTECARIO').attr('value');
		var VALORDELTERRENOTOTALHIPOTECARIO=$('#VALORDELTERRENOTOTALHIPOTECARIO').attr('value');
		var VALORDELACONSTRUCCIONHIPOTECARIO=$('#VALORDELACONSTRUCCIONHIPOTECARIO').attr('value');
		var VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO=$('#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO').attr('value');
		var VALORDELACONSTRUCCIONTOTALHIPOTECARIO=$('#VALORDELACONSTRUCCIONTOTALHIPOTECARIO').attr('value');
		var VALORHIPOTECARIO=$('#VALORHIPOTECARIO').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar13.php?VALORDELTERRENOHIPOTECARIOH="+VALORDELTERRENOHIPOTECARIOH+"&VALORDELTERRENOPORCENTAJEHIPOTECARIO="+VALORDELTERRENOPORCENTAJEHIPOTECARIO+"&VALORDELTERRENOTOTALHIPOTECARIO="+VALORDELTERRENOTOTALHIPOTECARIO+"&VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO="+VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO+"&VALORDELACONSTRUCCIONTOTALHIPOTECARIO="+VALORDELACONSTRUCCIONTOTALHIPOTECARIO+"&VALORHIPOTECARIO="+VALORHIPOTECARIO+"&VALORDELACONSTRUCCIONHIPOTECARIO="+VALORDELACONSTRUCCIONHIPOTECARIO+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 