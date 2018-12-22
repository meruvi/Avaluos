$(document).ready(function() {
    $('#imprimir').hover(function() {
        var VALORCOMERCIALBS2=$('#VALORCOMERCIALBS2').attr('value');
		var VALORCOMERCIALSUS2=$('#VALORCOMERCIALSUS2').attr('value');
		var VALORNETODEREALIZACIONOHIPOTECARIOBS2=$('#VALORNETODEREALIZACIONOHIPOTECARIOBS2').attr('value');
		var VALORNETODEREALIZACIONOHIPOTECARIOSUS2=$('#VALORNETODEREALIZACIONOHIPOTECARIOSUS2').attr('value');
		var VALORCATASTRALBS=$('#VALORCATASTRALBS').attr('value');
		var VALORCATASTRALSUS2=$('#VALORCATASTRALSUS2').attr('value');
		var VALORDEVENTARAPIDAOLIQUIDACIONBS=$('#VALORDEVENTARAPIDAOLIQUIDACIONBS').attr('value');
		var VALORDEVENTARAPIDAOLIQUIDACIONSUS2=$('#VALORDEVENTARAPIDAOLIQUIDACIONSUS2').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar3.php?VALORCOMERCIALBS2="+VALORCOMERCIALBS2+"&VALORCOMERCIALSUS2="+VALORCOMERCIALSUS2+"&VALORNETODEREALIZACIONOHIPOTECARIOBS2="+VALORNETODEREALIZACIONOHIPOTECARIOBS2+"&VALORCATASTRALBS="+VALORCATASTRALBS+"&VALORCATASTRALSUS2="+VALORCATASTRALSUS2+"&VALORDEVENTARAPIDAOLIQUIDACIONBS="+VALORDEVENTARAPIDAOLIQUIDACIONBS+"&VALORDEVENTARAPIDAOLIQUIDACIONSUS2="+VALORDEVENTARAPIDAOLIQUIDACIONSUS2+"&VALORNETODEREALIZACIONOHIPOTECARIOSUS2="+VALORNETODEREALIZACIONOHIPOTECARIOSUS2+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 