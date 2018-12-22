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
        //CALCULO TABLA 11 2
        var s11 = parseFloat($("#VALORDELACONSTRUCCION11").val());
        var s12 = parseFloat($("#VALORDELACONSTRUCCIONSUPERFICIE11").val());

        var Total11s = 0;
        Total11s = s11 * s12;
        Total11s = Math.round(Total11s * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELACONSTRUCCIONTOTAL11").val(parseFloat(Total11s));
        var total11 = 0;
        total11 = Total11p + Total11s;
        total11 = Math.round(total11 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCOMERCIALTOTAL11").val(parseFloat(total11));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(total11));
        $("#VALORCOMERCIALSUS2").val(parseFloat(total11));
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
        //CALCULO TABLA 11 2
        var s11 = parseFloat($("#VALORDELACONSTRUCCION11").val());
        var s12 = parseFloat($("#VALORDELACONSTRUCCIONSUPERFICIE11").val());

        var Total11s = 0;
        Total11s = s11 * s12;
        Total11s = Math.round(Total11s * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELACONSTRUCCIONTOTAL11").val(parseFloat(Total11s));
        var total11 = 0;
        total11 = Total11p + Total11s;
        total11 = Math.round(total11 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCOMERCIALTOTAL11").val(parseFloat(total11));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(total11));
        $("#VALORCOMERCIALSUS2").val(parseFloat(total11));
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
        //CALCULO TABLA 11 2
        var s11 = parseFloat($("#VALORDELACONSTRUCCION11").val());
        var s12 = parseFloat($("#VALORDELACONSTRUCCIONSUPERFICIE11").val());

        var Total11s = 0;
        Total11s = s11 * s12;
        Total11s = Math.round(Total11s * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELACONSTRUCCIONTOTAL11").val(parseFloat(Total11s));
        var total11 = 0;
        total11 = Total11p + Total11s;
        total11 = Math.round(total11 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCOMERCIALTOTAL11").val(parseFloat(total11));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(total11));
        $("#VALORCOMERCIALSUS2").val(parseFloat(total11));
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
        //CALCULO TABLA 11 2
        var s11 = parseFloat($("#VALORDELACONSTRUCCION11").val());
        var s12 = parseFloat($("#VALORDELACONSTRUCCIONSUPERFICIE11").val());

        var Total11s = 0;
        Total11s = s11 * s12;
        Total11s = Math.round(Total11s * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELACONSTRUCCIONTOTAL11").val(parseFloat(Total11s));
        var total11 = 0;
        total11 = Total11p + Total11s;
        total11 = Math.round(total11 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCOMERCIALTOTAL11").val(parseFloat(total11));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(total11));
        $("#VALORCOMERCIALSUS2").val(parseFloat(total11));
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
        //CALCULO TABLA 11 2
        var s11 = parseFloat($("#VALORDELACONSTRUCCION11").val());
        var s12 = parseFloat($("#VALORDELACONSTRUCCIONSUPERFICIE11").val());

        var Total11s = 0;
        Total11s = s11 * s12;
        Total11s = Math.round(Total11s * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORDELACONSTRUCCIONTOTAL11").val(parseFloat(Total11s));
        var total11 = 0;
        total11 = Total11p + Total11s;
        total11 = Math.round(total11 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        $("#VALORCOMERCIALTOTAL11").val(parseFloat(total11));
        $("#VALORCOMERCIALTOTALESSUS").val(parseFloat(total11));
        $("#VALORCOMERCIALSUS2").val(parseFloat(total11));
    });
});