//CALCULO TABLA 12 INMBOTECAS
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s13 = parseFloat($("#VALORCOMERCIALTOTALESSUS").val());
        var s14 = parseFloat($("#VALORHIPOTECARIOTOTALESSUS").val());
        var s15 = parseFloat($("#VALORCATASTRALTOTALESSUS").val());
        var s16 = parseFloat($("#VALORLIQUIDACIONTOTALESSUS").val());


        var tipoCambio = parseFloat($("#TIPOCAMBIO").val());

        var enbss13 = 0;
        var enbss14 = 0;
        var enbss15 = 0;
        var enbss16 = 0;

        enbss13 = s13 * tipoCambio;
        enbss14 = s14 * tipoCambio;
        enbss15 = s15 * tipoCambio;
        enbss16 = s16 * tipoCambio;

        enbss13 = Math.round(enbss13 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        enbss14 = Math.round(enbss14 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        enbss15 = Math.round(enbss15 * Math.pow(10, decimales)) / Math.pow(10, decimales);
        enbss16 = Math.round(enbss16 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALTOTALESBS").val(parseFloat(enbss13));
        $("#VALORHIPOTECARIOTOTALESBS").val(parseFloat(enbss14));
        $("#VALORCATASTRALTOTALESBS").val(parseFloat(enbss15));
        $("#VALORLIQUIDACIONTOTALESBS").val(parseFloat(enbss16));

        $("#VALORCOMERCIALBS2").val(parseFloat(enbss13));
        $("#VALORNETODEREALIZACIONOHIPOTECARIOBS2").val(parseFloat(enbss14));
        $("#VALORCATASTRALBS").val(parseFloat(enbss15));
        $("#VALORDEVENTARAPIDAOLIQUIDACIONBS").val(parseFloat(enbss16));

    });
});