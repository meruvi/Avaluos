//CALCULO TABLA 8
$(document).ready(function() {
    $('#ValorcatastralpormetrocuadradoconstruidoP').blur(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s1 = parseFloat($("#Valorcatastralpormetrocuadradoconstruido8").val());
        var s2 = parseFloat($("#FactordeDepreciacion").val());
        var s3 = parseFloat($("#SuperficieConstruida8").val());

        var valorCatastralMt2Total = 0;
        var valorCatastralTotal = 0;
        valorCatastralMt2Total = s1 * s2;
        valorCatastralTotal = valorCatastralMt2Total * s3;

        valorCatastralTotal = Math.round(valorCatastralTotal * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALM2TOTAL8").val(parseFloat(valorCatastralMt2Total));
        $("#VALORDELACONSTRUCCIONINMUEBLE").val(parseFloat(valorCatastralMt2Total));
        $("#VALORCATASTRALTOTAL8").val(parseFloat(valorCatastralTotal));
    });
});

$(document).ready(function() {
    $('#Anosdevida').blur(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s1 = parseFloat($("#Valorcatastralpormetrocuadradoconstruido8").val());
        var s2 = parseFloat($("#FactordeDepreciacion").val());
        var s3 = parseFloat($("#SuperficieConstruida8").val());

        var valorCatastralMt2Total = 0;
        var valorCatastralTotal = 0;
        valorCatastralMt2Total = s1 * s2;
        valorCatastralTotal = valorCatastralMt2Total * s3;

        valorCatastralTotal = Math.round(valorCatastralTotal * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALM2TOTAL8").val(parseFloat(valorCatastralMt2Total));
        $("#VALORDELACONSTRUCCIONINMUEBLE").val(parseFloat(valorCatastralMt2Total));
        $("#VALORCATASTRALTOTAL8").val(parseFloat(valorCatastralTotal));
    });
});
$(document).ready(function() {
    $('#SuperficieConstruida2').blur(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s1 = parseFloat($("#Valorcatastralpormetrocuadradoconstruido8").val());
        var s2 = parseFloat($("#FactordeDepreciacion").val());
        var s3 = parseFloat($("#SuperficieConstruida8").val());

        var valorCatastralMt2Total = 0;
        var valorCatastralTotal = 0;
        valorCatastralMt2Total = s1 * s2;
        valorCatastralTotal = valorCatastralMt2Total * s3;

        valorCatastralTotal = Math.round(valorCatastralTotal * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALM2TOTAL8").val(parseFloat(valorCatastralMt2Total));
        $("#VALORDELACONSTRUCCIONINMUEBLE").val(parseFloat(valorCatastralMt2Total));
        $("#VALORCATASTRALTOTAL8").val(parseFloat(valorCatastralTotal));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s1 = parseFloat($("#Valorcatastralpormetrocuadradoconstruido8").val());
        var s2 = parseFloat($("#FactordeDepreciacion").val());
        var s3 = parseFloat($("#SuperficieConstruida8").val());

        var valorCatastralMt2Total = 0;
        var valorCatastralTotal = 0;
        valorCatastralMt2Total = s1 * s2;
        valorCatastralTotal = valorCatastralMt2Total * s3;

        valorCatastralTotal = Math.round(valorCatastralTotal * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALM2TOTAL8").val(parseFloat(valorCatastralMt2Total));
        $("#VALORDELACONSTRUCCIONINMUEBLE").val(parseFloat(valorCatastralMt2Total));
        $("#VALORCATASTRALTOTAL8").val(parseFloat(valorCatastralTotal));
    });
});




