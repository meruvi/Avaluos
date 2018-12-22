//CALCULO TABLA 12 INMBOTECAS
$(document).ready(function() {
    $('#VALORDELTERRENOLIQUIDACION').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOLIQUIDACION").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONLIQUIDACION").val());
        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJELIQUIDACION").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION").val());

        var LIQ = 0;
        var LIQ2 = 0;
        var LIQ = s13 * s15;
        var LIQ2 = s14 * s16;

        LIQ = Math.round(LIQ * Math.pow(10, decimales)) / Math.pow(10, decimales);
        LIQ2 = Math.round(LIQ2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALLIQUIDACION").val(parseFloat(LIQ));
        $("#VALORDELACONSTRUCCIONTOTALLIQUIDACION").val(parseFloat(LIQ2));

        var totalliquidacion = 0;
        totalliquidacion = LIQ + LIQ2;
        totalliquidacion = Math.round(totalliquidacion * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORLIQUIDACION").val(parseFloat(totalliquidacion));
        $("#VALORLIQUIDACIONTOTALESSUS").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));

    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONLIQUIDACION').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOLIQUIDACION").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONLIQUIDACION").val());
        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJELIQUIDACION").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION").val());

        var LIQ = 0;
        var LIQ2 = 0;
        var LIQ = s13 * s15;
        var LIQ2 = s14 * s16;

        LIQ = Math.round(LIQ * Math.pow(10, decimales)) / Math.pow(10, decimales);
        LIQ2 = Math.round(LIQ2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALLIQUIDACION").val(parseFloat(LIQ));
        $("#VALORDELACONSTRUCCIONTOTALLIQUIDACION").val(parseFloat(LIQ2));

        var totalliquidacion = 0;
        totalliquidacion = LIQ + LIQ2;
        totalliquidacion = Math.round(totalliquidacion * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORLIQUIDACION").val(parseFloat(totalliquidacion));
        $("#VALORLIQUIDACIONTOTALESSUS").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));

    });
});
$(document).ready(function() {
    $('#VALORDELTERRENOPORCENTAJELIQUIDACION').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOLIQUIDACION").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONLIQUIDACION").val());
        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJELIQUIDACION").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION").val());

        var LIQ = 0;
        var LIQ2 = 0;
        var LIQ = s13 * s15;
        var LIQ2 = s14 * s16;

        LIQ = Math.round(LIQ * Math.pow(10, decimales)) / Math.pow(10, decimales);
        LIQ2 = Math.round(LIQ2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALLIQUIDACION").val(parseFloat(LIQ));
        $("#VALORDELACONSTRUCCIONTOTALLIQUIDACION").val(parseFloat(LIQ2));

        var totalliquidacion = 0;
        totalliquidacion = LIQ + LIQ2;
        totalliquidacion = Math.round(totalliquidacion * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORLIQUIDACION").val(parseFloat(totalliquidacion));
        $("#VALORLIQUIDACIONTOTALESSUS").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));

    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOLIQUIDACION").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONLIQUIDACION").val());
        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJELIQUIDACION").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION").val());

        var LIQ = 0;
        var LIQ2 = 0;
        var LIQ = s13 * s15;
        var LIQ2 = s14 * s16;

        LIQ = Math.round(LIQ * Math.pow(10, decimales)) / Math.pow(10, decimales);
        LIQ2 = Math.round(LIQ2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALLIQUIDACION").val(parseFloat(LIQ));
        $("#VALORDELACONSTRUCCIONTOTALLIQUIDACION").val(parseFloat(LIQ2));

        var totalliquidacion = 0;
        totalliquidacion = LIQ + LIQ2;
        totalliquidacion = Math.round(totalliquidacion * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORLIQUIDACION").val(parseFloat(totalliquidacion));
        $("#VALORLIQUIDACIONTOTALESSUS").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));

    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOLIQUIDACION").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONLIQUIDACION").val());
        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJELIQUIDACION").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION").val());

        var LIQ = 0;
        var LIQ2 = 0;
        var LIQ = s13 * s15;
        var LIQ2 = s14 * s16;

        LIQ = Math.round(LIQ * Math.pow(10, decimales)) / Math.pow(10, decimales);
        LIQ2 = Math.round(LIQ2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALLIQUIDACION").val(parseFloat(LIQ));
        $("#VALORDELACONSTRUCCIONTOTALLIQUIDACION").val(parseFloat(LIQ2));

        var totalliquidacion = 0;
        totalliquidacion = LIQ + LIQ2;
        totalliquidacion = Math.round(totalliquidacion * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORLIQUIDACION").val(parseFloat(totalliquidacion));
        $("#VALORLIQUIDACIONTOTALESSUS").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONSUS2").val(parseFloat(totalliquidacion));

    });
});