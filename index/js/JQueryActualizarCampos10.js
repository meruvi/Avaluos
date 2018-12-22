$(document).ready(function() {
    $('#imprimir').hover(function() {
        var Superficiedellote9=$('#Superficiedellote9').attr('value');
		var ValorcomercialporMT29=$('#ValorcomercialporMT29').attr('value');
		var FactordeInclinacion9=$('#FactordeInclinacion9').attr('value');
		var FactordeForma9=$('#FactordeForma9').attr('value');
		var FactordeServicios9=$('#FactordeServicios9').attr('value');
		var FactordeComerciabilidad9=$('#FactordeComerciabilidad9').attr('value');
		var VALORCOMERCIALMT2TOTAL9=$('#VALORCOMERCIALMT2TOTAL9').attr('value');
		var VALORTOTALCOMERCIALDELTERRENO9=$('#VALORTOTALCOMERCIALDELTERRENO9').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar10.php?Superficiedellote9="+Superficiedellote9+"&ValorcomercialporMT29="+ValorcomercialporMT29+"&FactordeInclinacion9="+FactordeInclinacion9+"&FactordeServicios9="+FactordeServicios9+"&FactordeComerciabilidad9="+FactordeComerciabilidad9+"&VALORCOMERCIALMT2TOTAL9="+VALORCOMERCIALMT2TOTAL9+"&VALORTOTALCOMERCIALDELTERRENO9="+VALORTOTALCOMERCIALDELTERRENO9+"&FactordeForma9="+FactordeForma9+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 