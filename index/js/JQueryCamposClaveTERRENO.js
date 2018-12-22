//ASIGNO DATOS DEL PRINCIPIO SUP. DEL LOTE A LAS TABLAS
$(document).ready(function() {
    $('#SuperficiedelLote2').blur(function(){
        var username = $(this).val();	
		$("#SuperficiedelLote7").val(username);
		$("#SuperficiedelTerreno4").val(username);
		$("#Superficiedellote9").val(username);
		$("#VALORDELTERRENOSUPERFICIE11").val(username);
		$("#VALORDELTERRENOSUPERFICIEINMUEBLE").val(username);	
    });
});


//ASIGNO EL VALOR IMPOSITIVO A LAS TABLAS 7 y 11 INMUEBLE
$(document).ready(function() {
    $('#ValorImpositivopormetrocuadrado').blur(function(){
        var username = $(this).val();	
		$("#ValorImpositivopormetrocuadrado7").val(username);
		
    });
});
//ASIGNO EL VALOR DE COMERCIAL A LAS TABLA 9
$(document).ready(function() {
    $('#ValorcomercialporMT2P').blur(function(){
		var username=$("#ValorcomercialporMT2P").val();
		$("#ValorcomercialporMT29").val(username);
		
    });
});

//ASIGNO EL VALOR DE FACTOR DE INCLINACION A LAS TABLA 8 Y 9
$(document).ready(function() {
    $('#FactordeinclinacionP').blur(function(){
        var username = $(this).val();	
		$("#FactordeInclinacion7").val(username);
		$("#FactordeInclinacion9").val(username);
			
    });
});
//ASIGNO EL VALOR DE FACTOR DE FORMA A LAS TABLA 8 Y 9
$(document).ready(function() {
    $('#FactordeformaP').blur(function(){
        var username = $(this).val();	
		$("#FactordeForma7").val(username);
		$("#FactordeForma9").val(username);
			
    });
});
//ASIGNO EL VALOR DE FACTOR DE COMERCIABILIDAD A LAS TABLA 9
$(document).ready(function() {
    $('#FactordeComerciabilidadP').blur(function(){
		var username=$("#FactordeComerciabilidadP").val();
		$("#FactordeComerciabilidad9").val(username);
		
    });
});




