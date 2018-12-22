//CALCULO TABLA 11
$(document).ready(function() {
    $('#VALORDELACONSTRUCCION11').hover(function() {
        //CALCULO AVALUO TECNICO COMERCIAL FINAL DEL INMUEBLE
        var decimales = 2;
        var s11 = parseFloat($("#VALORDELTERRENO11").val());
        var s12 = parseFloat($("#VALORDELTERRENOSUPERFICIE11").val());

        var Total11p = 0;
        Total11p = s11 * s12;
        Total11p = Math.round(Total11p * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELTERRENOTOTAL11").val(parseFloat(Total11p));

        $("#VALORCOMERCIALTOTAL11").val(parseFloat(Total11p));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(Total11p));
        $("#VALORCOMERCIALSUS2").val(parseFloat(Total11p));
    });
});
$(document).ready(function() {
    $('#VALORDELTERRENO11').hover(function() {
        //CALCULO AVALUO TECNICO COMERCIAL FINAL DEL INMUEBLE
        var decimales = 2;
        var s11 = parseFloat($("#VALORDELTERRENO11").val());
        var s12 = parseFloat($("#VALORDELTERRENOSUPERFICIE11").val());

        var Total11p = 0;
        Total11p = s11 * s12;
        Total11p = Math.round(Total11p * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELTERRENOTOTAL11").val(parseFloat(Total11p));

        $("#VALORCOMERCIALTOTAL11").val(parseFloat(Total11p));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(Total11p));
        $("#VALORCOMERCIALSUS2").val(parseFloat(Total11p));
    });
});
$(document).ready(function() {
    $('#VALORDELTERRENOSUPERFICIE11').hover(function() {
        //CALCULO AVALUO TECNICO COMERCIAL FINAL DEL INMUEBLE
        var decimales = 2;
        var s11 = parseFloat($("#VALORDELTERRENO11").val());
        var s12 = parseFloat($("#VALORDELTERRENOSUPERFICIE11").val());

        var Total11p = 0;
        Total11p = s11 * s12;
        Total11p = Math.round(Total11p * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELTERRENOTOTAL11").val(parseFloat(Total11p));

        $("#VALORCOMERCIALTOTAL11").val(parseFloat(Total11p));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(Total11p));
        $("#VALORCOMERCIALSUS2").val(parseFloat(Total11p));
    });
});
$(document).ready(function() {
    $('#VALORDELACONSTRUCCION11').hover(function() {
        //CALCULO AVALUO TECNICO COMERCIAL FINAL DEL INMUEBLE
        var decimales = 2;
        var s11 = parseFloat($("#VALORDELTERRENO11").val());
        var s12 = parseFloat($("#VALORDELTERRENOSUPERFICIE11").val());

        var Total11p = 0;
        Total11p = s11 * s12;
        Total11p = Math.round(Total11p * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELTERRENOTOTAL11").val(parseFloat(Total11p));

        $("#VALORCOMERCIALTOTAL11").val(parseFloat(Total11p));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(Total11p));
        $("#VALORCOMERCIALSUS2").val(parseFloat(Total11p));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        //CALCULO AVALUO TECNICO COMERCIAL FINAL DEL INMUEBLE
        var decimales = 2;
        var s11 = parseFloat($("#VALORDELTERRENO11").val());
        var s12 = parseFloat($("#VALORDELTERRENOSUPERFICIE11").val());

        var Total11p = 0;
        Total11p = s11 * s12;
        Total11p = Math.round(Total11p * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELTERRENOTOTAL11").val(parseFloat(Total11p));

        $("#VALORCOMERCIALTOTAL11").val(parseFloat(Total11p));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(Total11p));
        $("#VALORCOMERCIALSUS2").val(parseFloat(Total11p));
    });
});