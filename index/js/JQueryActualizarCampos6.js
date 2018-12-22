$(document).ready(function() {
    $('#imprimir').hover(function() {
        var Aguapotable=$('#Aguapotable').attr('value');
		var Aguapotable5=$('#Aguapotable5').attr('value');
		var EnergiaElectrica=$('#EnergiaElectrica').attr('value');
		var EnergiaElectrica5=$('#EnergiaElectrica5').attr('value');
		var ServicioTelefonico=$('#ServicioTelefonico').attr('value');
		var ServicioTelefonico5=$('#ServicioTelefonico5').attr('value');
		var AlcantarilladoPublico=$('#AlcantarilladoPublico').attr('value');
		var AlcantarilladoPublico5=$('#AlcantarilladoPublico5').attr('value');
		var GasDomiciliario=$('#GasDomiciliario').attr('value');
		var GasDomiciliario5=$('#GasDomiciliario5').attr('value');
		var Internet=$('#Internet').attr('value');
		var Internet5=$('#Internet5').attr('value');
		var Cable=$('#Cable').attr('value');
		var Cable5=$('#Cable5').attr('value');
		var Observaciones6=$('#Observaciones6').attr('value');
		var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar6.php?Aguapotable="+Aguapotable+"&Aguapotable5="+Aguapotable5+"&EnergiaElectrica="+EnergiaElectrica+"&EnergiaElectrica5="+EnergiaElectrica5+"&ServicioTelefonico="+ServicioTelefonico+"&ServicioTelefonico5="+ServicioTelefonico5+"&AlcantarilladoPublico="+AlcantarilladoPublico+"&AlcantarilladoPublico5="+AlcantarilladoPublico5+"&GasDomiciliario="+GasDomiciliario+"&GasDomiciliario5="+GasDomiciliario5+"&Internet="+Internet+"&Internet5="+Internet5+"&Cable="+Cable+"&Cable5="+Cable5+"&Observaciones6="+Observaciones6+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 