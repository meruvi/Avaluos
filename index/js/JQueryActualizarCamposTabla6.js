$(document).ready(function() {
    $('#imprimir').hover(function() {
        var MATERIALES7_B1=$('#MATERIALES7_B1').attr('value');
        var MATERIALES7_B2=$('#MATERIALES7_B2').attr('value');
        var MATERIALES7_B3=$('#MATERIALES7_B3').attr('value');
        var MATERIALES7_B4=$('#MATERIALES7_B4').attr('value');

		
        var PILOTAJE1_B1=$('#PILOTAJE1_B1').attr('value');
        var PILOTAJE1_B2=$('#PILOTAJE1_B2').attr('value');
        var PILOTAJE1_B3=$('#PILOTAJE1_B3').attr('value');
        var PILOTAJE1_B4=$('#PILOTAJE1_B4').attr('value');

		
        var TIERRA4_B1=$('#TIERRA4_B1').attr('value');
        var TIERRA4_B2=$('#TIERRA4_B2').attr('value');
        var TIERRA4_B3=$('#TIERRA4_B3').attr('value');
        var TIERRA4_B4=$('#TIERRA4_B4').attr('value');

		
        var MARMOL7_B1=$('#MARMOL7_B1').attr('value');
        var MARMOL7_B2=$('#MARMOL7_B2').attr('value');
        var MARMOL7_B3=$('#MARMOL7_B3').attr('value');
        var MARMOL7_B4=$('#MARMOL7_B4').attr('value');

        var RADIER1_B1=$('#RADIER1_B1').attr('value');
        var RADIER1_B2=$('#RADIER1_B2').attr('value');
        var RADIER1_B3=$('#RADIER1_B3').attr('value');
        var RADIER1_B4=$('#RADIER1_B4').attr('value');

		
        var CERAMICA4_B1=$('#CERAMICA4_B1').attr('value');
        var CERAMICA4_B2=$('#CERAMICA4_B2').attr('value');
        var CERAMICA4_B3=$('#CERAMICA4_B3').attr('value');
        var CERAMICA4_B4=$('#CERAMICA4_B4').attr('value');

		
        var CERAMICA7_B1=$('#CERAMICA7_B1').attr('value');
        var CERAMICA7_B2=$('#CERAMICA7_B2').attr('value');
        var CERAMICA7_B3=$('#CERAMICA7_B3').attr('value');
        var CERAMICA7_B4=$('#CERAMICA7_B4').attr('value');


        var HORMIGON1_B1=$('#HORMIGON1_B1').attr('value');
        var HORMIGON1_B2=$('#HORMIGON1_B2').attr('value');
        var HORMIGON1_B3=$('#HORMIGON1_B3').attr('value');
        var HORMIGON1_B4=$('#HORMIGON1_B4').attr('value');

		
        var CERAMICAROJA4_B1=$('#CERAMICAROJA4_B1').attr('value');
        var CERAMICAROJA4_B2=$('#CERAMICAROJA4_B2').attr('value');
        var CERAMICAROJA4_B3=$('#CERAMICAROJA4_B3').attr('value');
        var CERAMICAROJA4_B4=$('#CERAMICAROJA4_B4').attr('value');

		
        var PLACAS7_B1=$('#PLACAS7_B1').attr('value');
        var PLACAS7_B2=$('#PLACAS7_B2').attr('value');
        var PLACAS7_B3=$('#PLACAS7_B3').attr('value');
        var PLACAS7_B4=$('#PLACAS7_B4').attr('value');


		
        var METALICA1_B1=$('#METALICA1_B1').attr('value');
        var METALICA1_B2=$('#METALICA1_B2').attr('value');
        var METALICA1_B3=$('#METALICA1_B3').attr('value');
        var METALICA1_B4=$('#METALICA1_B4').attr('value');


        var ALFOMBRADO4_B1=$('#ALFOMBRADO4_B1').attr('value');
        var ALFOMBRADO4_B2=$('#ALFOMBRADO4_B2').attr('value');
        var ALFOMBRADO4_B3=$('#ALFOMBRADO4_B3').attr('value');
        var ALFOMBRADO4_B4=$('#ALFOMBRADO4_B4').attr('value');

		
        var CEMENTO7_B1=$('#CEMENTO7_B1').attr('value');
        var CEMENTO7_B2=$('#CEMENTO7_B2').attr('value');
        var CEMENTO7_B3=$('#CEMENTO7_B3').attr('value');
        var CEMENTO7_B4=$('#CEMENTO7_B4').attr('value');

		
        var PIEDRA1_B1=$('#PIEDRA1_B1').attr('value');
        var PIEDRA1_B2=$('#PIEDRA1_B2').attr('value');
        var PIEDRA1_B3=$('#PIEDRA1_B3').attr('value');
        var PIEDRA1_B4=$('#PIEDRA1_B4').attr('value');

		
        var ENTABLONADO4_B1=$('#ENTABLONADO4_B1').attr('value');
        var ENTABLONADO4_B2=$('#ENTABLONADO4_B2').attr('value');
        var ENTABLONADO4_B3=$('#ENTABLONADO4_B3').attr('value');
        var ENTABLONADO4_B4=$('#ENTABLONADO4_B4').attr('value');

		
        var PIEDRA7_B1=$('#PIEDRA7_B1').attr('value');
        var PIEDRA7_B2=$('#PIEDRA7_B2').attr('value');
        var PIEDRA7_B3=$('#PIEDRA7_B3').attr('value');
        var PIEDRA7_B4=$('#PIEDRA7_B4').attr('value');


        var LADRILLO1_B1=$('#LADRILLO1_B1').attr('value');
        var LADRILLO1_B2=$('#LADRILLO1_B2').attr('value');
        var LADRILLO1_B3=$('#LADRILLO1_B3').attr('value');
        var LADRILLO1_B4=$('#LADRILLO1_B4').attr('value');

		
        var PARQUET4_B1=$('#PARQUET4_B1').attr('value');
        var PARQUET4_B2=$('#PARQUET4_B2').attr('value');
        var PARQUET4_B3=$('#PARQUET4_B3').attr('value');
        var PARQUET4_B4=$('#PARQUET4_B4').attr('value');

		
        var CAL7_B1=$('#CAL7_B1').attr('value');
        var CAL7_B2=$('#CAL7_B2').attr('value');
        var CAL7_B3=$('#CAL7_B3').attr('value');
        var CAL7_B4=$('#CAL7_B4').attr('value');

		
        var ADOBE1_B1=$('#ADOBE1_B1').attr('value');
        var ADOBE1_B2=$('#ADOBE1_B2').attr('value');
        var ADOBE1_B3=$('#ADOBE1_B3').attr('value');
        var ADOBE1_B4=$('#ADOBE1_B4').attr('value');

		
        var MACHIMBRADO4_B1=$('#MACHIMBRADO4_B1').attr('value');
        var MACHIMBRADO4_B2=$('#MACHIMBRADO4_B2').attr('value');
        var MACHIMBRADO4_B3=$('#MACHIMBRADO4_B3').attr('value');
        var MACHIMBRADO4_B4=$('#MACHIMBRADO4_B4').attr('value');

		
        var CEMENTO4_B1=$('#CEMENTO4_B1').attr('value');
        var CEMENTO4_B2=$('#CEMENTO4_B2').attr('value');
        var CEMENTO4_B3=$('#CEMENTO4_B3').attr('value');
        var CEMENTO4_B4=$('#CEMENTO4_B4').attr('value');

		
        var MOSAICO4_B1=$('#MOSAICO4_B1').attr('value');
        var MOSAICO4_B2=$('#MOSAICO4_B2').attr('value');
        var MOSAICO4_B3=$('#MOSAICO4_B3').attr('value');
        var MOSAICO4_B4=$('#MOSAICO4_B4').attr('value');

		
        var MADERA8_B1=$('#MADERA8_B1').attr('value');
        var MADERA8_B2=$('#MADERA8_B2').attr('value');
        var MADERA8_B3=$('#MADERA8_B3').attr('value');
        var MADERA8_B4=$('#MADERA8_B4').attr('value');

		
        var HORMIGON2_B1=$('#HORMIGON2_B1').attr('value');
        var HORMIGON2_B2=$('#HORMIGON2_B2').attr('value');
        var HORMIGON2_B3=$('#HORMIGON2_B3').attr('value');
        var HORMIGON2_B4=$('#HORMIGON2_B4').attr('value');

		
        var LOSA4_B1=$('#LOSA4_B1').attr('value');
        var LOSA4_B2=$('#LOSA4_B2').attr('value');
        var LOSA4_B3=$('#LOSA4_B3').attr('value');
        var LOSA4_B4=$('#LOSA4_B4').attr('value');

		
        var ALUMINIOS8_B1=$('#ALUMINIOS8_B1').attr('value');
        var ALUMINIOS8_B2=$('#ALUMINIOS8_B2').attr('value');
        var ALUMINIOS8_B3=$('#ALUMINIOS8_B3').attr('value');
        var ALUMINIOS8_B4=$('#ALUMINIOS8_B4').attr('value');

		
        var PIEDRA2_B1=$('#PIEDRA2_B1').attr('value');
        var PIEDRA2_B2=$('#PIEDRA2_B2').attr('value');
        var PIEDRA2_B3=$('#PIEDRA2_B3').attr('value');
        var PIEDRA2_B4=$('#PIEDRA2_B4').attr('value');

		
        var MADERASEGUNDA8_B1=$('#MADERASEGUNDA8_B1').attr('value');
        var MADERASEGUNDA8_B2=$('#MADERASEGUNDA8_B2').attr('value');
        var MADERASEGUNDA8_B3=$('#MADERASEGUNDA8_B3').attr('value');
        var MADERASEGUNDA8_B4=$('#MADERASEGUNDA8_B4').attr('value');

		
        var LADRILLO2_B1=$('#LADRILLO2_B1').attr('value');
        var LADRILLO2_B2=$('#LADRILLO2_B2').attr('value');
        var LADRILLO2_B3=$('#LADRILLO2_B3').attr('value');
        var LADRILLO2_B4=$('#LADRILLO2_B4').attr('value');

		
        var MATERIALES5_B1=$('#MATERIALES5_B1').attr('value');
        var MATERIALES5_B2=$('#MATERIALES5_B2').attr('value');
        var MATERIALES5_B3=$('#MATERIALES5_B3').attr('value');
        var MATERIALES5_B4=$('#MATERIALES5_B4').attr('value');

		
        var METALICA8_B1=$('#METALICA8_B1').attr('value');
        var METALICA8_B2=$('#METALICA8_B2').attr('value');
        var METALICA8_B3=$('#METALICA8_B3').attr('value');
        var METALICA8_B4=$('#METALICA8_B4').attr('value');

				
        var BLOQUE2_B1=$('#BLOQUE2_B1').attr('value');
        var BLOQUE2_B2=$('#BLOQUE2_B2').attr('value');
        var BLOQUE2_B3=$('#BLOQUE2_B3').attr('value');
        var BLOQUE2_B4=$('#BLOQUE2_B4').attr('value');

		
        var MADERA5_B1=$('#MADERA5_B1').attr('value');
        var MADERA5_B2=$('#MADERA5_B2').attr('value');
        var MADERA5_B3=$('#MADERA5_B3').attr('value');
        var MADERA5_B4=$('#MADERA5_B4').attr('value');


        var LADRILLOHUECO2_B1=$('#LADRILLOHUECO2_B1').attr('value');
        var LADRILLOHUECO2_B2=$('#LADRILLOHUECO2_B2').attr('value');
        var LADRILLOHUECO2_B3=$('#LADRILLOHUECO2_B3').attr('value');
        var LADRILLOHUECO2_B4=$('#LADRILLOHUECO2_B4').attr('value');

		
        var YESO5_B1=$('#YESO5_B1').attr('value');
        var YESO5_B2=$('#YESO5_B2').attr('value');
        var YESO5_B3=$('#YESO5_B3').attr('value');
        var YESO5_B4=$('#YESO5_B4').attr('value');

		
        var ADOBE2_B1=$('#ADOBE2_B1').attr('value');
        var ADOBE2_B2=$('#ADOBE2_B2').attr('value');
        var ADOBE2_B3=$('#ADOBE2_B3').attr('value');
        var ADOBE2_B4=$('#ADOBE2_B4').attr('value');

		
        var COTENCIO5_B1=$('#COTENCIO5_B1').attr('value');
        var COTENCIO5_B2=$('#COTENCIO5_B2').attr('value');
        var COTENCIO5_B3=$('#COTENCIO5_B3').attr('value');
        var COTENCIO5_B4=$('#COTENCIO5_B4').attr('value');

		
        var MADERA9_B1=$('#MADERA9_B1').attr('value');
        var MADERA9_B2=$('#MADERA9_B2').attr('value');
        var MADERA9_B3=$('#MADERA9_B3').attr('value');
        var MADERA9_B4=$('#MADERA9_B4').attr('value');

		
        var MADERA2_B1=$('#MADERA2_B1').attr('value');
        var MADERA2_B2=$('#MADERA2_B2').attr('value');
        var MADERA2_B3=$('#MADERA2_B3').attr('value');
        var MADERA2_B4=$('#MADERA2_B4').attr('value');

		
        var ALUMINIOS9_B1=$('#ALUMINIOS9_B1').attr('value');
        var ALUMINIOS9_B2=$('#ALUMINIOS9_B2').attr('value');
        var ALUMINIOS9_B3=$('#ALUMINIOS9_B3').attr('value');
        var ALUMINIOS9_B4=$('#ALUMINIOS9_B4').attr('value');

		
        var MATERIALES6_B1=$('#MATERIALES6_B1').attr('value');
        var MATERIALES6_B2=$('#MATERIALES6_B2').attr('value');
        var MATERIALES6_B3=$('#MATERIALES6_B3').attr('value');
        var MATERIALES6_B4=$('#MATERIALES6_B4').attr('value');

		
        var MADERASEGUNDA9_B1=$('#MADERASEGUNDA9_B1').attr('value');
        var MADERASEGUNDA9_B2=$('#MADERASEGUNDA9_B2').attr('value');
        var MADERASEGUNDA9_B3=$('#MADERASEGUNDA9_B3').attr('value');
        var MADERASEGUNDA9_B4=$('#MADERASEGUNDA9_B4').attr('value');

		
        var HORMIGON3_B1=$('#HORMIGON3_B1').attr('value');
        var HORMIGON3_B2=$('#HORMIGON3_B2').attr('value');
        var HORMIGON3_B3=$('#HORMIGON3_B3').attr('value');
        var HORMIGON3_B4=$('#HORMIGON3_B4').attr('value');


        var MARMOS6_B1=$('#MARMOS6_B1').attr('value');
        var MARMOS6_B2=$('#MARMOS6_B2').attr('value');
        var MARMOS6_B3=$('#MARMOS6_B3').attr('value');
        var MARMOS6_B4=$('#MARMOS6_B4').attr('value');

		
        var METALICAS9_B1=$('#METALICAS9_B1').attr('value');
        var METALICAS9_B2=$('#METALICAS9_B2').attr('value');
        var METALICAS9_B3=$('#METALICAS9_B3').attr('value');
        var METALICAS9_B4=$('#METALICAS9_B4').attr('value');

		
        var TEJA3_B1=$('#TEJA3_B1').attr('value');
        var TEJA3_B2=$('#TEJA3_B2').attr('value');
        var TEJA3_B3=$('#TEJA3_B3').attr('value');
        var TEJA3_B4=$('#TEJA3_B4').attr('value');

		
        var CERAMICA6_B1=$('#CERAMICA6_B1').attr('value');
        var CERAMICA6_B2=$('#CERAMICA6_B2').attr('value');
        var CERAMICA6_B3=$('#CERAMICA6_B3').attr('value');
        var CERAMICA6_B4=$('#CERAMICA6_B4').attr('value');

		
        var TEJAASFALTICA3_B1=$('#TEJAASFALTICA3_B1').attr('value');
        var TEJAASFALTICA3_B2=$('#TEJAASFALTICA3_B2').attr('value');
        var TEJAASFALTICA3_B3=$('#TEJAASFALTICA3_B3').attr('value');
        var TEJAASFALTICA3_B4=$('#TEJAASFALTICA3_B4').attr('value');

		
        var MOSAICO6_B1=$('#MOSAICO6_B1').attr('value');
        var MOSAICO6_B2=$('#MOSAICO6_B2').attr('value');
        var MOSAICO6_B3=$('#MOSAICO6_B3').attr('value');
        var MOSAICO6_B4=$('#MOSAICO6_B4').attr('value');


        var PLACA3_B1=$('#PLACA3_B1').attr('value');
        var PLACA3_B2=$('#PLACA3_B2').attr('value');
        var PLACA3_B3=$('#PLACA3_B3').attr('value');
        var PLACA3_B4=$('#PLACA3_B4').attr('value');

		
        var MADERA6_B1=$('#MADERA6_B1').attr('value');
        var MADERA6_B2=$('#MADERA6_B2').attr('value');
        var MADERA6_B3=$('#MADERA6_B3').attr('value');
        var MADERA6_B4=$('#MADERA6_B4').attr('value');

		
        var CALAMINA3_B1=$('#CALAMINA3_B1').attr('value');
        var CALAMINA3_B2=$('#CALAMINA3_B2').attr('value');
        var CALAMINA3_B3=$('#CALAMINA3_B3').attr('value');
        var CALAMINA3_B4=$('#CALAMINA3_B4').attr('value');

		
        var YESO6_B1=$('#YESO6_B1').attr('value');
        var YESO6_B2=$('#YESO6_B2').attr('value');
        var YESO6_B3=$('#YESO6_B3').attr('value');
        var YESO6_B4=$('#YESO6_B4').attr('value');

		
        var CALAMINAPLASTICA3_B1=$('#CALAMINAPLASTICA3_B1').attr('value');
        var CALAMINAPLASTICA3_B2=$('#CALAMINAPLASTICA3_B2').attr('value');
        var CALAMINAPLASTICA3_B3=$('#CALAMINAPLASTICA3_B3').attr('value');
        var CALAMINAPLASTICA3_B4=$('#CALAMINAPLASTICA3_B4').attr('value');

		
        var CEMENTO6_B1=$('#CEMENTO6_B1').attr('value');
        var CEMENTO6_B2=$('#CEMENTO6_B2').attr('value');
        var CEMENTO6_B3=$('#CEMENTO6_B3').attr('value');
        var CEMENTO6_B4=$('#CEMENTO6_B4').attr('value');

		
        var BARRO6_B1=$('#BARRO6_B1').attr('value');
        var BARRO6_B2=$('#BARRO6_B2').attr('value');
        var BARRO6_B3=$('#BARRO6_B3').attr('value');
        var BARRO6_B4=$('#BARRO6_B4').attr('value');
		
		var LOSA5_B1=$('#LOSA5_B1').attr('value');
        var LOSA5_B2=$('#LOSA5_B2').attr('value');
        var LOSA5_B3=$('#LOSA5_B3').attr('value');
        var LOSA5_B4=$('#LOSA5_B4').attr('value');
		
		
		
		
				
        var codAvaluo=$('#codAvaluo').attr('value');
        $.ajax({
            //tipo de dato que se pasara para recuperar la imagen
            type: "POST",
            //script al que se llama para mostrar la imagen
            url: "index/js/Query/queryActualizarTabla6.php?BARRO6_B1="+BARRO6_B1+"&BARRO6_B2="+BARRO6_B2+"&BARRO6_B3="+BARRO6_B3+"&BARRO6_B4="+BARRO6_B4+
            "&MATERIALES7_B1="+MATERIALES7_B1+"&MATERIALES7_B2="+MATERIALES7_B2+"&MATERIALES7_B3="+MATERIALES7_B3+"&MATERIALES7_B4="+MATERIALES7_B4+
            "&PILOTAJE1_B1="+PILOTAJE1_B1+"&PILOTAJE1_B2="+PILOTAJE1_B2+"&PILOTAJE1_B3="+PILOTAJE1_B3+"&PILOTAJE1_B4="+PILOTAJE1_B4+
            "&TIERRA4_B1="+TIERRA4_B1+"&TIERRA4_B2="+TIERRA4_B2+"&TIERRA4_B3="+TIERRA4_B3+"&TIERRA4_B4="+TIERRA4_B4+
            "&MARMOL7_B1="+MARMOL7_B1+"&MARMOL7_B2="+MARMOL7_B2+"&MARMOL7_B3="+MARMOL7_B3+"&MARMOL7_B4="+MARMOL7_B4+
            "&RADIER1_B1="+RADIER1_B1+"&RADIER1_B2="+RADIER1_B2+"&RADIER1_B3="+RADIER1_B3+"&RADIER1_B4="+RADIER1_B4+
            "&CERAMICA4_B1="+CERAMICA4_B1+"&CERAMICA4_B2="+CERAMICA4_B2+"&CERAMICA4_B3="+CERAMICA4_B3+"&CERAMICA4_B4="+CERAMICA4_B4+
            "&CERAMICA7_B1="+CERAMICA7_B1+"&CERAMICA7_B2="+CERAMICA7_B2+"&CERAMICA7_B3="+CERAMICA7_B3+"&CERAMICA7_B4="+CERAMICA7_B4+
            "&HORMIGON1_B1="+HORMIGON1_B1+"&HORMIGON1_B2="+HORMIGON1_B2+"&HORMIGON1_B3="+HORMIGON1_B3+"&HORMIGON1_B4="+HORMIGON1_B4+
            "&CERAMICAROJA4_B1="+CERAMICAROJA4_B1+"&CERAMICAROJA4_B2="+CERAMICAROJA4_B2+"&CERAMICAROJA4_B3="+CERAMICAROJA4_B3+"&CERAMICAROJA4_B4="+CERAMICAROJA4_B4+
            "&PLACAS7_B1="+PLACAS7_B1+"&PLACAS7_B2="+PLACAS7_B2+"&PLACAS7_B3="+PLACAS7_B3+"&PLACAS7_B4="+PLACAS7_B4+
            "&ALFOMBRADO4_B1="+ALFOMBRADO4_B1+"&ALFOMBRADO4_B2="+ALFOMBRADO4_B2+"&ALFOMBRADO4_B3="+ALFOMBRADO4_B3+"&ALFOMBRADO4_B4="+ALFOMBRADO4_B4+
            "&CEMENTO7_B1="+CEMENTO7_B1+"&CEMENTO7_B2="+CEMENTO7_B2+"&CEMENTO7_B3="+CEMENTO7_B3+"&CEMENTO7_B4="+CEMENTO7_B4+
            "&PIEDRA1_B1="+PIEDRA1_B1+"&PIEDRA1_B2="+PIEDRA1_B2+"&PIEDRA1_B3="+PIEDRA1_B3+"&PIEDRA1_B4="+PIEDRA1_B4+
            "&ENTABLONADO4_B1="+ENTABLONADO4_B1+"&ENTABLONADO4_B2="+ENTABLONADO4_B2+"&ENTABLONADO4_B3="+ENTABLONADO4_B3+"&ENTABLONADO4_B4="+ENTABLONADO4_B4+
            "&PIEDRA7_B1="+PIEDRA7_B1+"&PIEDRA7_B2="+PIEDRA7_B2+"&PIEDRA7_B3="+PIEDRA7_B3+"&PIEDRA7_B4="+PIEDRA7_B4+
            "&LADRILLO1_B1="+LADRILLO1_B1+"&LADRILLO1_B2="+LADRILLO1_B2+"&LADRILLO1_B3="+LADRILLO1_B3+"&LADRILLO1_B4="+LADRILLO1_B4+
            "&PARQUET4_B1="+PARQUET4_B1+"&PARQUET4_B2="+PARQUET4_B2+"&PARQUET4_B3="+PARQUET4_B3+"&PARQUET4_B4="+PARQUET4_B4+
            "&CAL7_B1="+CAL7_B1+"&CAL7_B2="+CAL7_B2+"&CAL7_B3="+CAL7_B3+"&CAL7_B4="+CAL7_B4+
            "&ADOBE1_B1="+ADOBE1_B1+"&ADOBE1_B2="+ADOBE1_B2+"&ADOBE1_B3="+ADOBE1_B3+"&ADOBE1_B4="+ADOBE1_B4+
            "&MACHIMBRADO4_B1="+MACHIMBRADO4_B1+"&MACHIMBRADO4_B2="+MACHIMBRADO4_B2+"&MACHIMBRADO4_B3="+MACHIMBRADO4_B3+"&MACHIMBRADO4_B4="+MACHIMBRADO4_B4+
            "&CEMENTO4_B1="+CEMENTO4_B1+"&CEMENTO4_B2="+CEMENTO4_B2+"&CEMENTO4_B3="+CEMENTO4_B3+"&CEMENTO4_B4="+CEMENTO4_B4+
            "&MOSAICO4_B1="+MOSAICO4_B1+"&MOSAICO4_B2="+MOSAICO4_B2+"&MOSAICO4_B3="+MOSAICO4_B3+"&MOSAICO4_B4="+MOSAICO4_B4+
            "&MADERA8_B1="+MADERA8_B1+"&MADERA8_B2="+MADERA8_B2+"&MADERA8_B3="+MADERA8_B3+"&MADERA8_B4="+MADERA8_B4+
            "&HORMIGON2_B1="+HORMIGON2_B1+"&HORMIGON2_B2="+HORMIGON2_B2+"&HORMIGON2_B3="+HORMIGON2_B3+"&HORMIGON2_B4="+HORMIGON2_B4+
            "&LOSA4_B1="+LOSA4_B1+"&LOSA4_B2="+LOSA4_B2+"&LOSA4_B3="+LOSA4_B3+"&LOSA4_B4="+LOSA4_B4+
            "&ALUMINIOS8_B1="+ALUMINIOS8_B1+"&ALUMINIOS8_B2="+ALUMINIOS8_B2+"&ALUMINIOS8_B3="+ALUMINIOS8_B3+"&ALUMINIOS8_B4="+ALUMINIOS8_B4+
            "&PIEDRA2_B1="+PIEDRA2_B1+"&PIEDRA2_B2="+PIEDRA2_B2+"&PIEDRA2_B3="+PIEDRA2_B3+"&PIEDRA2_B4="+PIEDRA2_B4+
            "&MADERASEGUNDA8_B1="+MADERASEGUNDA8_B1+"&MADERASEGUNDA8_B2="+MADERASEGUNDA8_B2+"&MADERASEGUNDA8_B3="+MADERASEGUNDA8_B3+"&MADERASEGUNDA8_B4="+MADERASEGUNDA8_B4+
            "&LADRILLO2_B1="+LADRILLO2_B1+"&LADRILLO2_B2="+LADRILLO2_B2+"&LADRILLO2_B3="+LADRILLO2_B3+"&LADRILLO2_B4="+LADRILLO2_B4+
            "&MATERIALES5_B1="+MATERIALES5_B1+"&MATERIALES5_B2="+MATERIALES5_B2+"&MATERIALES5_B3="+MATERIALES5_B3+"&MATERIALES5_B4="+MATERIALES5_B4+
            "&METALICA8_B1="+METALICA8_B1+"&METALICA8_B2="+METALICA8_B2+"&METALICA8_B3="+METALICA8_B3+"&METALICA8_B4="+METALICA8_B4+
            "&BLOQUE2_B1="+BLOQUE2_B1+"&BLOQUE2_B2="+BLOQUE2_B2+"&BLOQUE2_B3="+BLOQUE2_B3+"&BLOQUE2_B4="+BLOQUE2_B4+
            "&MADERA5_B1="+MADERA5_B1+"&MADERA5_B2="+MADERA5_B2+"&MADERA5_B3="+MADERA5_B3+"&MADERA5_B4="+MADERA5_B4+
            "&LADRILLOHUECO2_B1="+LADRILLOHUECO2_B1+"&LADRILLOHUECO2_B2="+LADRILLOHUECO2_B2+"&LADRILLOHUECO2_B3="+LADRILLOHUECO2_B3+"&LADRILLOHUECO2_B4="+LADRILLOHUECO2_B4+
            "&YESO5_B1="+YESO5_B1+"&YESO5_B2="+YESO5_B2+"&YESO5_B3="+YESO5_B3+"&YESO5_B4="+YESO5_B4+
            "&ADOBE2_B1="+ADOBE2_B1+"&ADOBE2_B2="+ADOBE2_B2+"&ADOBE2_B3="+ADOBE2_B3+"&ADOBE2_B4="+ADOBE2_B4+
            "&COTENCIO5_B1="+COTENCIO5_B1+"&COTENCIO5_B2="+COTENCIO5_B2+"&COTENCIO5_B3="+COTENCIO5_B3+"&COTENCIO5_B4="+COTENCIO5_B4+
            "&MADERA9_B1="+MADERA9_B1+"&MADERA9_B2="+MADERA9_B2+"&MADERA9_B3="+MADERA9_B3+"&MADERA9_B4="+MADERA9_B4+
            "&MADERA2_B1="+MADERA2_B1+"&MADERA2_B2="+MADERA2_B2+"&MADERA2_B3="+MADERA2_B3+"&MADERA2_B4="+MADERA2_B4+
            "&ALUMINIOS9_B1="+ALUMINIOS9_B1+"&ALUMINIOS9_B2="+ALUMINIOS9_B2+"&ALUMINIOS9_B3="+ALUMINIOS9_B3+"&ALUMINIOS9_B4="+ALUMINIOS9_B4+
            "&MATERIALES6_B1="+MATERIALES6_B1+"&MATERIALES6_B2="+MATERIALES6_B2+"&MATERIALES6_B3="+MATERIALES6_B3+"&MATERIALES6_B4="+MATERIALES6_B4+
            "&MADERASEGUNDA9_B1="+MADERASEGUNDA9_B1+"&MADERASEGUNDA9_B2="+MADERASEGUNDA9_B2+"&MADERASEGUNDA9_B3="+MADERASEGUNDA9_B3+"&MADERASEGUNDA9_B4="+MADERASEGUNDA9_B4+
            "&HORMIGON3_B1="+HORMIGON3_B1+"&HORMIGON3_B2="+HORMIGON3_B2+"&HORMIGON3_B3="+HORMIGON3_B3+"&HORMIGON3_B4="+HORMIGON3_B4+
            "&MARMOS6_B1="+MARMOS6_B1+"&MARMOS6_B2="+MARMOS6_B2+"&MARMOS6_B3="+MARMOS6_B3+"&MARMOS6_B4="+MARMOS6_B4+
            "&METALICAS9_B1="+METALICAS9_B1+"&METALICAS9_B2="+METALICAS9_B2+"&METALICAS9_B3="+METALICAS9_B3+"&METALICAS9_B4="+METALICAS9_B4+
            "&TEJA3_B1="+TEJA3_B1+"&TEJA3_B2="+TEJA3_B2+"&TEJA3_B3="+TEJA3_B3+"&TEJA3_B4="+TEJA3_B4+
            "&CERAMICA6_B1="+CERAMICA6_B1+"&CERAMICA6_B2="+CERAMICA6_B2+"&CERAMICA6_B3="+CERAMICA6_B3+"&CERAMICA6_B4="+CERAMICA6_B4+
            "&TEJAASFALTICA3_B1="+TEJAASFALTICA3_B1+"&TEJAASFALTICA3_B2="+TEJAASFALTICA3_B2+"&TEJAASFALTICA3_B3="+TEJAASFALTICA3_B3+"&TEJAASFALTICA3_B4="+TEJAASFALTICA3_B4+
            "&MOSAICO6_B1="+MOSAICO6_B1+"&MOSAICO6_B2="+MOSAICO6_B2+"&MOSAICO6_B3="+MOSAICO6_B3+"&MOSAICO6_B4="+MOSAICO6_B4+
            "&PLACA3_B1="+PLACA3_B1+"&PLACA3_B2="+PLACA3_B2+"&PLACA3_B3="+PLACA3_B3+"&PLACA3_B4="+PLACA3_B4+
            "&MADERA6_B1="+MADERA6_B1+"&MADERA6_B2="+MADERA6_B2+"&MADERA6_B3="+MADERA6_B3+"&MADERA6_B4="+MADERA6_B4+
            "&CALAMINA3_B1="+CALAMINA3_B1+"&CALAMINA3_B2="+CALAMINA3_B2+"&CALAMINA3_B3="+CALAMINA3_B3+"&CALAMINA3_B4="+CALAMINA3_B4+
            "&YESO6_B1="+YESO6_B1+"&YESO6_B2="+YESO6_B2+"&YESO6_B3="+YESO6_B3+"&YESO6_B4="+YESO6_B4+
            "&CALAMINAPLASTICA3_B1="+CALAMINAPLASTICA3_B1+"&CALAMINAPLASTICA3_B2="+CALAMINAPLASTICA3_B2+"&CALAMINAPLASTICA3_B3="+CALAMINAPLASTICA3_B3+"&CALAMINAPLASTICA3_B4="+CALAMINAPLASTICA3_B4+
            "&CEMENTO6_B1="+CEMENTO6_B1+"&CEMENTO6_B2="+CEMENTO6_B2+"&CEMENTO6_B3="+CEMENTO6_B3+"&CEMENTO6_B4="+CEMENTO6_B4+
			"&LOSA5_B1="+LOSA5_B1+"&LOSA5_B2="+LOSA5_B2+"&LOSA5_B3="+LOSA5_B3+"&LOSA5_B4="+LOSA5_B4+
            "&METALICA1_B1="+METALICA1_B1+"&METALICA1_B2="+METALICA1_B2+"&METALICA1_B3="+METALICA1_B3+"&METALICA1_B4="+METALICA1_B4
            +"&codAvaluo="+codAvaluo,
            //valos que se le para a el script
				
            //mensage que devolvera la funcion
            success: function(data){
                $('#Info').fadeIn(1000).html(data);
            }
        });
       
    });

}) 