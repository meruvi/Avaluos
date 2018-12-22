//CALCULO TABLA 12 INMBOTECAS
$(document).ready(function() {
    $('#VALORDELTERRENOINMUEBLE').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));

    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONINMUEBLE').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
    });
});
$(document).ready(function() {
    $('#VALORDELTERRENOSUPERFICIEINMUEBLE').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
    });
});
$(document).ready(function() {
    $('#TIPOCAMBIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOINMUEBLE").val());
        var s15 = parseFloat($("#VALORDELTERRENOSUPERFICIEINMUEBLE").val());
        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var INMB = 0;
        var INMB = s13 * s15;
        INMB = Math.round(INMB * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALINMUEBLE").val(parseFloat(INMB));

        var totalinmueble = 0;
        var totalinmueblesus = 0;
        totalinmueble = INMB;
        totalinmueblesus = totalinmueble / tipoCambio;
        totalinmueble = Math.round(totalinmueble * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCATASTRALTOTALBS").val(parseFloat(totalinmueble));
        $("#VALORCATASTRALTOTALSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALTOTALESSUS").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
        $("#VALORCATASTRALSUS2").val(parseFloat(totalinmueblesus));
    });
});