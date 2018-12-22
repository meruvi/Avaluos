//CALCULO TABLA 7
$(document).ready(function() {
    $('#SuperficiedelLote2').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#ValorImpositivopormetrocuadrado').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#FactordeinclinacionP').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#FactordeformaP').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#FactordeServicios7').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});

/////////AL CAMBIAR VALORES DEL SERVICIOS
$(document).ready(function() {
    $('#Aguapotable5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#EnergiaElectrica5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#AlcantarilladoPublico5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#GasDomiciliario5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#Internet5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#Cable5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s1 = parseFloat($("#ValorImpositivopormetrocuadrado7").val());
        var s2 = parseFloat($("#FactordeInclinacion7").val());
        var s3 = parseFloat($("#FactordeForma7").val());
        var s4 = parseFloat($("#FactordeServicios7").val());

        var valorimpm2total = 0;
        valorimpm2total = s1 * s2 * s3 * s4;
        $("#VALORIMPOSITIVOMT2TOTAL7").val(parseFloat(valorimpm2total));
        $("#VALORDELTERRENOINMUEBLE").val(valorimpm2total);

        var s5 = parseFloat($("#SuperficiedelLote7").val());

        var varvalorcatastraltotal7 = 0;
        varvalorcatastraltotal7 = s5 * valorimpm2total;

        varvalorcatastraltotal7 = Math.round(varvalorcatastraltotal7 * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCATASTRALTOTALBS7").val(parseFloat(varvalorcatastraltotal7));
    });
});

