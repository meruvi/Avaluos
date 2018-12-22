//CALCULO TABLA 12 HIPOTECAS
$(document).ready(function() {
    $('#VALORDELTERRENOHIPOTECARIOH').hover(function() {
        var decimales = 2;
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP2 = 0;
        var HIP2 = s14 * s16;

        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP2));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP2));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP2));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP2 = 0;
        var HIP2 = s14 * s16;

        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP2));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP2));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP2));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP2 = 0;
        var HIP2 = s14 * s16;

        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP2));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP2));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP2));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP2 = 0;
        var HIP2 = s14 * s16;

        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP2));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP2));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP2));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {

        var decimales = 2;
        var s14 = parseFloat($("#VALORDELACONSTRUCCIONHIPOTECARIO").val());

        var s16 = parseFloat($("#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO").val());

        var HIP2 = 0;
        var HIP2 = s14 * s16;

        HIP2 = Math.round(HIP2 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELACONSTRUCCIONTOTALHIPOTECARIO").val(parseFloat(HIP2));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP2));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP2));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP2));
    });
});