//PARA LA SU DE LOS SERVICIOS POR AGUA
$(document).ready(function() {
    $('#Aguapotable5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));
		
    });
});

//PARA LA SU DE LOS SERVICIOS POR ENERGIA
$(document).ready(function() {
    $('#EnergiaElectrica5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));
    });
});

//PARA LA SU DE LOS SERVICIOS POR ALCANTARILLADO
$(document).ready(function() {
    $('#AlcantarilladoPublico5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));
    });
});

//PARA LA SU DE LOS SERVICIOS POR GAS DOM
$(document).ready(function() {
    $('#GasDomiciliario5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));

    });
});


//PARA LA SU DE LOS SERVICIOS POR INTE
$(document).ready(function() {
    $('#Internet5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));
    });
});

//PARA LA SU DE LOS SERVICIOS POR CABLE
$(document).ready(function() {
    $('#Cable5').blur(function(){
		var s1 =parseFloat($("#Aguapotable5").val());
		var s2 =parseFloat($("#EnergiaElectrica5").val());
		var s3 =parseFloat($("#AlcantarilladoPublico5").val());
		var s4 =parseFloat($("#GasDomiciliario5").val());
		var s5 =parseFloat($("#Internet5").val());
		var s6 =parseFloat($("#Cable5").val());
		
		var valorfactorinclinacion=0;
		valorfactorinclinacion=s1+s2+s3+s4+s5+s6;
		$("#FactordeServicios7").val(parseFloat(valorfactorinclinacion));
		$("#FactordeServicios9").val(parseFloat(valorfactorinclinacion));
    });
});


