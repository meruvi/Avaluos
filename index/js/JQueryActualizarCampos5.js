$(document).ready(function() {
    $('#imprimir').hover(function() {
        var AccesoVia=$('#AccesoVia').attr('value');
		var SuperficiedelTerreno4=$('#SuperficiedelTerreno4').attr('value');
		var Frente=$('#Frente').attr('value');
		var Fondo=$('#Fondo').attr('value');
		var Superficieconstruida4=$('#Superficieconstruida4').attr('value');
		var Forma=$('#Forma').attr('value');
		var Topografia=$('#Topografia').attr('value');
		var Resistenciadelsuelo=$('#Resistenciadelsuelo').attr('value');
		var Norte=$('#Norte').attr('value');
		var Sur=$('#Sur').attr('value');
		var Este=$('#Este').attr('value');
		var Oeste=$('#Oeste').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar5.php?AccesoVia="+AccesoVia+"&SuperficiedelTerreno4="+SuperficiedelTerreno4+"&Frente="+Frente+"&Superficieconstruida4="+Superficieconstruida4+"&Forma="+Forma+"&Topografia="+Topografia+"&Resistenciadelsuelo="+Resistenciadelsuelo+"&Fondo="+Fondo+"&Norte="+Norte+"&Sur="+Sur+"&Este="+Este+"&Oeste="+Oeste+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 