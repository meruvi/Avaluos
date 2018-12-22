$(document).ready(function() {
    $('#imprimir').hover(function() {
        var Valorcatastralpormetrocuadradoconstruido8=$('#Valorcatastralpormetrocuadradoconstruido8').attr('value');		
var FactordeDepreciacion=$('#FactordeDepreciacion').attr('value');
		var SuperficieConstruida8=$('#SuperficieConstruida8').attr('value');
		var VALORCATASTRALM2TOTAL8=$('#VALORCATASTRALM2TOTAL8').attr('value');
		var VALORCATASTRALTOTAL8=$('#VALORCATASTRALTOTAL8').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar9.php?Valorcatastralpormetrocuadradoconstruido8="+Valorcatastralpormetrocuadradoconstruido8+"&FactordeDepreciacion="+FactordeDepreciacion+"&SuperficieConstruida8="+SuperficieConstruida8+"&VALORCATASTRALM2TOTAL8="+VALORCATASTRALM2TOTAL8+"&VALORCATASTRALTOTAL8="+VALORCATASTRALTOTAL8+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 