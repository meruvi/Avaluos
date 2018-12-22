$(document).ready(function() {
    $('#imprimir').hover(function() {
        var Usodesuelo=$('#Usodesuelo').attr('value');
		var Anchodevia=$('#Anchodevia').attr('value');
		var Materialdevia=$('#Materialdevia').attr('value');
		var Tipodevia=$('#Tipodevia').attr('value');
		var Aceras=$('#Aceras').attr('value');
		var Transporte=$('#Transporte').attr('value');
		var Densidaddepoblacion=$('#Densidaddepoblacion').attr('value');
		var Descripcion=$('#Descripcion').attr('value');
				var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar4.php?Usodesuelo="+Usodesuelo+"&Anchodevia="+Anchodevia+"&Materialdevia="+Materialdevia+"&Aceras="+Aceras+"&Transporte="+Transporte+"&Densidaddepoblacion="+Densidaddepoblacion+"&Descripcion="+Descripcion+"&Tipodevia="+Tipodevia+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 