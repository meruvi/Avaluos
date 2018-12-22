$(document).ready(function() {
    $('#imprimir').hover(function() {
        var Residencial=$('#Residencial').is(":checked");
		var Oficina=$('#Oficina').is(":checked");
		var Comercial=$('#Comercial').is(":checked");
		var Otros6=$('#Otros6').attr('value');
		var Propietarios=$('#Propietarios').is(":checked");
		var Inquilinos=$('#Inquilinos').is(":checked");
		var Otros62=$('#Otros62').attr('value');
		var Lujo=$('#Lujo').is(":checked");
		var Semilujo=$('#Semilujo').is(":checked");
		var Standart=$('#Standart').is(":checked");
		var Economico=$('#Economico').is(":checked");
		var Bueno=$('#Bueno').is(":checked");
		var Regular=$('#Regular').is(":checked");
		var Malo=$('#Malo').is(":checked");
		var MuyMalo=$('#MuyMalo').is(":checked");
		var Antiguedad=$('#Antiguedad').attr('value');
		var Descripcion7=$('#Descripcion7').attr('value');
		var Numerodeambientes=$('#Numerodeambientes').attr('value');
		var Numerodebloques=$('#Numerodebloques').attr('value');
		var codAvaluo=$('#codAvaluo').attr('value');
            $.ajax({
                           //tipo de dato que se pasara para recuperar la imagen 
                type: "POST",
                //script al que se llama para mostrar la imagen
                url: "index/js/Query/queryActualizar7.php?Residencial="+Residencial+"&Oficina="+Oficina+"&Comercial="+Comercial+"&Otros6="+Otros6+"&Propietarios="+Propietarios+"&Inquilinos="+Inquilinos+"&Otros62="+Otros62+"&Lujo="+Lujo+"&Semilujo="+Semilujo+"&Standart="+Standart+"&Economico="+Economico+"&Bueno="+Bueno+"&Regular="+Regular+"&Malo="+Malo+"&MuyMalo="+MuyMalo+"&Antiguedad="+Antiguedad+"&Descripcion7="+Descripcion7+"&Numerodebloques="+Numerodebloques+"&Numerodeambientes="+Numerodeambientes+"&codAvaluo="+codAvaluo,
                //valos que se le para a el script
				
                //mensage que devolvera la funcion
                success: function(data){
          		$('#Info').fadeIn(1000).html(data);
                //   $('#Info').fadeIn(1000).html("Actualizando Datos");
                }
            });
       
    });

}) 