//CALCULO TABLA 12 HIPOTECAS
$(document).ready(function() {
    $('#VALORDELTERRENOHIPOTECARIOH').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());

        var HIP = s13 * s15;
        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());

        var HIP = s13 * s15;
        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());

        var HIP = s13 * s15;
        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO').blur(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());

        var HIP = s13 * s15;
        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORDELTERRENOHIPOTECARIOH").val());

        var s15 = parseFloat($("#VALORDELTERRENOPORCENTAJEHIPOTECARIO").val());

        var HIP = s13 * s15;
        HIP = Math.round(HIP * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORDELTERRENOTOTALHIPOTECARIO").val(parseFloat(HIP));

        $("#VALORHIPOTECARIO").val(parseFloat(HIP));
        $("#VALORHIPOTECARIOTOTALESSUS").val(parseFloat(HIP));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOSUS2").val(parseFloat(HIP));
    });
});