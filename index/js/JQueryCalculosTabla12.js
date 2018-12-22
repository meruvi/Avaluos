//CALCULO TABLA 12 HIPOTECAS
$(document).ready(function() {
    $('#VALORDELTERRENOHIPOTECARIOH').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP = 0;
        var HIP2 = 0;
        var HIP = s13 * s15;
        var HIP2 = s14 * s16;

        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);
        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        var totalhipotecario = 0;
        totalhipotecario = HIP + HIP2;
        totalhipotecario = Math.round(totalhipotecario * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORHIPOTECARIO").val(parseFloat(totalhipotecario));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(totalhipotecario));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(totalhipotecario));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP = 0;
        var HIP2 = 0;
        var HIP = s13 * s15;
        var HIP2 = s14 * s16;

        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);
        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        var totalhipotecario = 0;
        totalhipotecario = HIP + HIP2;
        totalhipotecario = Math.round(totalhipotecario * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORHIPOTECARIO").val(parseFloat(totalhipotecario));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(totalhipotecario));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(totalhipotecario));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP = 0;
        var HIP2 = 0;
        var HIP = s13 * s15;
        var HIP2 = s14 * s16;

        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);
        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        var totalhipotecario = 0;
        totalhipotecario = HIP + HIP2;
        totalhipotecario = Math.round(totalhipotecario * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORHIPOTECARIO").val(parseFloat(totalhipotecario));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(totalhipotecario));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(totalhipotecario));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP = 0;
        var HIP2 = 0;
        var HIP = s13 * s15;
        var HIP2 = s14 * s16;

        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);
        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        var totalhipotecario = 0;
        totalhipotecario = HIP + HIP2;
        totalhipotecario = Math.round(totalhipotecario * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORHIPOTECARIO").val(parseFloat(totalhipotecario));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(totalhipotecario));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(totalhipotecario));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {

        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());
        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP = 0;
        var HIP2 = 0;
        var HIP = s13 * s15;
        var HIP2 = s14 * s16;

        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);
        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        var totalhipotecario = 0;
        totalhipotecario = HIP + HIP2;
        totalhipotecario = Math.round(totalhipotecario * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORHIPOTECARIO").val(parseFloat(totalhipotecario));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(totalhipotecario));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(totalhipotecario));
    });
});