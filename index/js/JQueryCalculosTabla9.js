//CALCULO TABLA 9
$(document).ready(function() {
    $('#SuperficiedelLote2').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#ValorcomercialporMT2P').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#FactordeinclinacionP').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#FactordeformaP').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#FactordeServicios7').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});

/////////AL CAMBIAR VALORES DEL SERVICIOS
$(document).ready(function() {
    $('#Aguapotable5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#EnergiaElectrica5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#AlcantarilladoPublico5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#GasDomiciliario5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#Internet5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#Cable5').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#FactordeComerciabilidadP').blur(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});
$(document).ready(function() {
    $('#imprimir').hover(function() {
        var decimales = 2;
        var s1 = parseFloat($("#Superficiedellote9").val());
        var s2 = parseFloat($("#ValorcomercialporMT29").val());
        var s3 = parseFloat($("#FactordeInclinacion9").val());
        var s4 = parseFloat($("#FactordeForma9").val());
        var s5 = parseFloat($("#FactordeServicios9").val());
        var s6 = parseFloat($("#FactordeComerciabilidad9").val());

        var valorComercialMT2Total = 0;
        var valorComercialDelTerreno = 0;

        valorComercialMT2Total = s2 * s3 * s4 * s5 * s6;
        valorComercialMT2Total = Math.round(valorComercialMT2Total * Math.pow(10, decimales)) / Math.pow(10, decimales);
        valorComercialDelTerreno = parseFloat(valorComercialMT2Total) * parseFloat(s1);
        valorComercialDelTerreno = Math.round(valorComercialDelTerreno * Math.pow(10, decimales)) / Math.pow(10, decimales);

        $("#VALORCOMERCIALMT2TOTAL9").val(parseFloat(valorComercialMT2Total));
        $("#VALORDELTERRENO11").val(parseFloat(valorComercialMT2Total));

        $("#VALORTOTALCOMERCIALDELTERRENO9").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOHIPOTECARIOH").val(parseFloat(valorComercialDelTerreno));
        $("#VALORDELTERRENOLIQUIDACION").val(parseFloat(valorComercialDelTerreno));
    });
});

