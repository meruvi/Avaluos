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

//ASIGNO SUPERFICIE CONSTRUIIDA ENVIO DE VALORES CORRESPONDIENTES A LAS TABLAS
$(document).ready(function() {
    $('#SuperficieConstruida2').blur(function(){

        var username = $(this).val();	
		$("#Superficieconstruida4").val(username);
		$("#SuperficieConstruida8").val(username);
	 	$("#SuperficieConstruida10").val(username);
		$("#VALORDELACONSTRUCCIONSUPERFICIE11").val(username);
		$("#VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE").val(username);
		
		
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
//ASIGNO EL VALOR DE FACTOR DE DEPRECIACION A LAS TABLA 8 Y 10
$(document).ready(function() {
    $('#Anosdevida').blur(function(){
        var username = $(this).val();	
		$("#FactordeDepreciacion").val(username);
		$("#FactordeDepreciacion10").val(username);
		
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
//ASIGNO EL VALOR DE Valor catastral por M2 Construido a la Tabla 8
$(document).ready(function() {
    $('#ValorcatastralpormetrocuadradoconstruidoP').blur(function(){
		var username=$("#ValorcatastralpormetrocuadradoconstruidoP").val();
		$("#Valorcatastralpormetrocuadradoconstruido8").val(username);
		
    });
});
//ASIGNO EL VALOR DE Valor Comercial por M2 Construido a la Tabla 10
$(document).ready(function() {
    $('#ValorcomercialporMT2ConstrP').blur(function(){
		var username=$("#ValorcomercialporMT2ConstrP").val();
		$("#ValorcomercialporMTconstruido10").val(username);
		
    });
});




