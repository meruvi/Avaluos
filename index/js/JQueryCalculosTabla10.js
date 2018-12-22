//CALCULO TABLA 10
$(document).ready(function() {
    $('#ValorcomercialporMT2ConstrP').blur(function() {
        var decimales = 2;
        var s7 = parseFloat($("#SuperficieConstruida10").val());
        var s8 = parseFloat($("#ValorcomercialporMTconstruido10").val());
        var s9 = parseFloat($("#FactordeDepreciacion10").val());


        var VALORTOTALDELACONSTRUCIONMT2 = 0;
        var VALORTOTALDELACONSTRUCCION = 0;
        VALORTOTALDELACONSTRUCIONMT2 = s8 * s9;
        VALORTOTALDELACONSTRUCIONMT2 = Math.round(VALORTOTALDELACONSTRUCIONMT2 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        VALORTOTALDELACONSTRUCCION = VALORTOTALDELACONSTRUCIONMT2 * s7;
        VALORTOTALDELACONSTRUCCION = Math.round(VALORTOTALDELACONSTRUCCION * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORTOTALDELACONSTRUCCION10").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));
        $("#VALORDELACONSTRUCCION11").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));

        $("#VALORTOTALCOMERCIALDELTERRENO10").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONHIPOTECARIO").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONLIQUIDACION").val(parseFloat(VALORTOTALDELACONSTRUCCION));
    });
});

$(document).ready(function() {
    $('#Anosdevida').blur(function() {
        var decimales = 2;
        var s7 = parseFloat($("#SuperficieConstruida10").val());
        var s8 = parseFloat($("#ValorcomercialporMTconstruido10").val());
        var s9 = parseFloat($("#FactordeDepreciacion10").val());


        var VALORTOTALDELACONSTRUCIONMT2 = 0;
        var VALORTOTALDELACONSTRUCCION = 0;
        VALORTOTALDELACONSTRUCIONMT2 = s8 * s9;
        VALORTOTALDELACONSTRUCIONMT2 = Math.round(VALORTOTALDELACONSTRUCIONMT2 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        VALORTOTALDELACONSTRUCCION = VALORTOTALDELACONSTRUCIONMT2 * s7;
        VALORTOTALDELACONSTRUCCION = Math.round(VALORTOTALDELACONSTRUCCION * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORTOTALDELACONSTRUCCION10").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));
        $("#VALORDELACONSTRUCCION11").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));

        $("#VALORTOTALCOMERCIALDELTERRENO10").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONHIPOTECARIO").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONLIQUIDACION").val(parseFloat(VALORTOTALDELACONSTRUCCION));
    });
});
$(document).ready(function() {
    $('#SuperficieConstruida2').blur(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s7 = parseFloat($("#SuperficieConstruida10").val());
        var s8 = parseFloat($("#ValorcomercialporMTconstruido10").val());
        var s9 = parseFloat($("#FactordeDepreciacion10").val());


        var VALORTOTALDELACONSTRUCIONMT2 = 0;
        var VALORTOTALDELACONSTRUCCION = 0;
        VALORTOTALDELACONSTRUCIONMT2 = s8 * s9;
        VALORTOTALDELACONSTRUCIONMT2 = Math.round(VALORTOTALDELACONSTRUCIONMT2 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        VALORTOTALDELACONSTRUCCION = VALORTOTALDELACONSTRUCIONMT2 * s7;
        VALORTOTALDELACONSTRUCCION = Math.round(VALORTOTALDELACONSTRUCCION * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORTOTALDELACONSTRUCCION10").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));
        $("#VALORDELACONSTRUCCION11").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));

        $("#VALORTOTALCOMERCIALDELTERRENO10").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONHIPOTECARIO").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONLIQUIDACION").val(parseFloat(VALORTOTALDELACONSTRUCCION));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        //SUMAMOS PARA LA TABLA 8
        var decimales = 2;
        var s7 = parseFloat($("#SuperficieConstruida10").val());
        var s8 = parseFloat($("#ValorcomercialporMTconstruido10").val());
        var s9 = parseFloat($("#FactordeDepreciacion10").val());


        var VALORTOTALDELACONSTRUCIONMT2 = 0;
        var VALORTOTALDELACONSTRUCCION = 0;
        VALORTOTALDELACONSTRUCIONMT2 = s8 * s9;
        VALORTOTALDELACONSTRUCIONMT2 = Math.round(VALORTOTALDELACONSTRUCIONMT2 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        VALORTOTALDELACONSTRUCCION = VALORTOTALDELACONSTRUCIONMT2 * s7;
        VALORTOTALDELACONSTRUCCION = Math.round(VALORTOTALDELACONSTRUCCION * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORTOTALDELACONSTRUCCION10").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));
        $("#VALORDELACONSTRUCCION11").val(parseFloat(VALORTOTALDELACONSTRUCIONMT2));

        $("#VALORTOTALCOMERCIALDELTERRENO10").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONHIPOTECARIO").val(parseFloat(VALORTOTALDELACONSTRUCCION));
        $("#VALORDELACONSTRUCCIONLIQUIDACION").val(parseFloat(VALORTOTALDELACONSTRUCCION));
    });
});