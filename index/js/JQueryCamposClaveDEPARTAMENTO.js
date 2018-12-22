//ASIGNO SUPERFICIE CONSTRUIIDA ENVIO DE VALORES CORRESPONDIENTES A LAS TABLAS
$(document).ready(function() {
    $('#SuperficieConstruida2').blur(function() {

        var username = $(this).val();
        $("#Superficieconstruida4").val(username);
        $("#SuperficieConstruida8").val(username);
        $("#SuperficieConstruida10").val(username);
        $("#VALORDELACONSTRUCCIONSUPERFICIE11").val(username);
        $("#VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE").val(username);


    });
});

//ASIGNO EL VALOR DE FACTOR DE DEPRECIACION A LAS TABLA 8 Y 10
$(document).ready(function() {
    $('#Anosdevida').blur(function() {
        var username = $(this).val();
        $("#FactordeDepreciacion").val(username);
        $("#FactordeDepreciacion10").val(username);

    });
});
//ASIGNO EL VALOR DE Valor catastral por M2 Construido a la Tabla 8
$(document).ready(function() {
    $('#ValorcatastralpormetrocuadradoconstruidoP').blur(function() {
        var username = $("#ValorcatastralpormetrocuadradoconstruidoP").val();
        $("#Valorcatastralpormetrocuadradoconstruido8").val(username);

    });
});
//ASIGNO EL VALOR DE Valor Comercial por M2 Construido a la Tabla 10
$(document).ready(function() {
    $('#ValorcomercialporMT2ConstrP').blur(function() {
        var username = $("#ValorcomercialporMT2ConstrP").val();
        $("#ValorcomercialporMTconstruido10").val(username);

    });
});




