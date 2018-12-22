<?php

/* * *****************************************************************
 * Clase: CCalculo
 * @copyright 2010
 * ***************************************************************** */
////////////////////////////////////////////////////////////////////
require 'common/lib/Tabla7_Controlador.php';
require 'common/lib/Tabla8_Controlador.php';
require 'common/lib/Tabla9_Controlador.php';
require 'common/lib/Tabla10_Controlador.php';
require 'common/lib/Tabla11_Controlador.php';
require 'common/lib/Tabla112_Controlador.php';
require 'common/lib/Tabla113_Controlador.php';
require 'common/lib/Tabla114_Controlador.php';
require 'common/lib/Tabla115_Controlador.php';
require 'common/lib/Tabla116_Controlador.php';
require 'common/lib/Tabla117_Controlador.php';
require 'common/lib/Tabla18_Controlador.php';
require 'common/lib/Tabla119_Controlador.php';

class CCalculoAvaluo {

    function Calculodelvalorcatastraldelterreno() {
        $objTabla7Controlador = new Tabla7__Controlador;
        $arrayTabla7 = $objTabla7Controlador->getArrayDatosTabla7($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>7. Cálculo del valor catastral del terreno.-</h3>
</header>
<p>
<table width="80%" class="Tabla3">
	<tr>
		<td>
		Superficie del Lote :
		</td>
		<td>
		<input type="text" name="SuperficiedelLote7" id="SuperficiedelLote7" size="7" value="' . $arrayTabla7["Superficie_Lote"] . '" />M2
		</td>
	</tr>
	<tr>
		<td>
		Valor Impositivo por metro cuadrado  :
		</td>
		<td>
		<input type="text" name="ValorImpositivopormetrocuadrado7" id="ValorImpositivopormetrocuadrado7" size="10" class="cajaVerde" value="' . $arrayTabla7["Valor_Impositivo_Mt2"] . '" />BS
		</td>
	</tr>
	<tr>
		<td>
		Factor de Inclinación :
		</td>
		<td>
		<input type="text" name="FactordeInclinacion7" id="FactordeInclinacion7" size="4" value="' . $arrayTabla7["Factor_Inclinacion"] . '" />%
		</td>
	</tr>
	<tr>
		<td>
		Factor de Forma :
		</td>
		<td>
		<input type="text" name="FactordeForma7" id="FactordeForma7" size="4" value="' . $arrayTabla7["Factor_Forma"] . '" />%
		</td>
	</tr>
	<tr>
		<td>
		Factor de sevicios :
		</td>
		<td>
		<input type="text" name="FactordeServicios7" id="FactordeServicios7" size="4" value="' . $arrayTabla7["Factor_Servicios"] . '"/>%(Automatico calculado factor - servicios)
		</td>
	</tr>
	<tr>
		<td>
		VALOR IMPOSITIVO MT2 TOTAL :
		</td>
		<td>
		<input type="text" name="VALORIMPOSITIVOMT2TOTAL7" id="VALORIMPOSITIVOMT2TOTAL7" size="10" class="cajaVerde" value="' . $arrayTabla7["Valor_Impositivo_Mt2_Total"] . '" />BS
		</td>
	</tr>
	<tr>
		<td>
		VALOR CATASTRAL TOTAL (BS) :
		</td>
		<td>
		<input type="text" name="VALORCATASTRALTOTALBS7" id="VALORCATASTRALTOTALBS7" size="10" class="cajaVerde" value="' . $arrayTabla7["Valor_Catastral_Total"] . '" />BS
		</td>
	</tr>
</table>
</p>
</article>';
        return $sHTM;
    }

    function Calculodelvalorcatastraldelaconstruccion() {
        $objTabla8Controlador = new Tabla8__Controlador;
        $arrayTabla8 = $objTabla8Controlador->getArrayDatosTabla8($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>8. Cálculo del valor catastral de la construcción .-</h3>
</header>
<p>
<table width="100%" border="0" class="Tabla3">
	<tr>
		<td>Valor catastral por metro cuadrado construido : </td>
		<td>
		<input type="text" name="Valorcatastralpormetrocuadradoconstruido8" id="Valorcatastralpormetrocuadradoconstruido8" class="cajaVerde" size="10" value="' . $arrayTabla8["Valor_Catastral_Mt2_Construido"] . '" />BS (Datos de la alcaldia)
		</td>
	</tr>
	<tr>
		<td>Factor de Depreciación</td>
		<td>
		  <input type="text" name="FactordeDepreciacion" id="FactordeDepreciacion" size="4" value="' . $arrayTabla8["Factor_Depreciacion"] . '" />% (Factor que viene de los años de antiguedad del terreno)</td>
	</tr>
	<tr>
		<td>
		Superficie Construida:
		</td>
		<td>
		<input type="text" id="SuperficieConstruida8" name="SuperficieConstruida8" size="10" value="' . $arrayTabla8["Superficie_Construida"] . '" />MT2
		</td>
	</tr>
	<tr>
		<td>VALOR CATASTRAL M2 TOTAL : </td>
		<td><input type="text" id="VALORCATASTRALM2TOTAL8" name="VALORCATASTRALM2TOTAL8" size="10" class="cajaVerde" value="' . $arrayTabla8["Valor_Catastral_Mt2_Total"] . '" />
		  BS</td>
	</tr>
	<tr>
		<td>
		VALOR CATASTRAL TOTAL :
		</td>
		<td>
		<input type="text" id="VALORCATASTRALTOTAL8" name="VALORCATASTRALTOTAL8" size="10" class="cajaVerde" value="' . $arrayTabla8["Valor_Catastral_Total"] . '" /> 
		BS
		</td>
	</tr>
</table>
</p>

</article>
';
        return $sHTM;
    }

    function Calculodelvalortecnicocomercialdelterreno() {
        $objTabla9Controlador = new Tabla9__Controlador;
        $arrayTabla9 = $objTabla9Controlador->getArrayDatosTabla9($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>9. Cálculo del valor técnico comercial del terreno.-</h3>
</header>
<p>
<table width=60%" border="0" class="Tabla3">
	<tr>
		<td>Superficie del terreno :</td>
		<td>
		<input type="text" name="Superficiedellote9" id="Superficiedellote9" size="10" value="' . $arrayTabla9["Superficie_Terreno"] . '" />
		MT2</td>
	</tr>
	<tr>
		<td>Valor comercial por MT2 :</td>
		<td>
		<input type="text" name="ValorcomercialporMT29" id="ValorcomercialporMT29" size="10" class="cajaAzul" value="' . $arrayTabla9["Valor_Comercial_Mt2"] . '" /> 
		SUS
</td>
	</tr>
	<tr>
	  <td>Factor de inclinación :</td>
	  <td><input type="text" name="FactordeInclinacion9" id="FactordeInclinacion9" size="4" value="' . $arrayTabla9["Factor_Inclinacion"] . '" />%
	  </td>
    </tr>
	<tr>
	  <td>Factor de Forma :</td>
	  <td><input type="text" id="FactordeForma9" name="FactordeForma9" size="4" value="' . $arrayTabla9["Factor_Forma"] . '"/>%</td>
    </tr>
	<tr>
	  <td>Factor de Servicios :</td>
	  <td><input type="text" name="FactordeServicios9" id="FactordeServicios9" size="4" value="' . $arrayTabla9["Factor_Servicios"] . '"/>%
	    </td>
    </tr>
	<tr>
	  <td>Factor de Comerciabilidad :</td>
	  <td><input type="text" name="FactordeComerciabilidad9" id="FactordeComerciabilidad9" size="4" value="' . $arrayTabla9["Factor_Comerciabilidad"] . '" />%
	    </td>
    </tr>
	<tr>
	  <td>VALOR COMERCIAL MT2 TOTAL : </td>
	  <td><input type="text" name="VALORCOMERCIALMT2TOTAL9" id="VALORCOMERCIALMT2TOTAL9" size="10" readonly="readonly" class="cajaAzul" value="' . $arrayTabla9["Valor_Comercial_Mt2_Total"] . '" />
	    SUS</td>
    </tr>
	<tr>
	  <td> VALOR TOTAL COMERCIAL DEL TERRENO: </td>
	  <td><input type="text" name="VALORTOTALCOMERCIALDELTERRENO9" id="VALORTOTALCOMERCIALDELTERRENO9" size="10" value="' . $arrayTabla9["Valor_Total_Comercial_Terreno"] . '"  class="cajaAzul" />
SUS</td>
    </tr>
</table>
</p>
  <p>&nbsp;</p>';
        return $sHTM;
    }

    function CalculodelvalortecnicocomercialdelterrenoenBS() {
        $sHTM = '';
        $sHTM.='<article class="post">
	<h3>9.1 Cálculo del valor técnico comercial del terreno en BS.-</h3>
<p>&nbsp;</p>
<table width="60%" border="0" class="Tabla3">
  <tr>
    <td>Superficie del terreno :</td>
    <td><input type="text" name="Superficiedelterrenobs" size="10" />
      MT2</td>
  </tr>
  <tr>
    <td>Valor comercial por MT2 :</td>
    <td><input type="text" name="ValorcomercialporMTbs" size="10" class="cajaVerde"/>
    BS</td>
  </tr>
  <tr>
    <td>Factor de inclinación :</td>
    <td><select name="Factordeinclinacionbs">
      <option value="1">1</option>
      <option value="0.80">0.80</option>
    </select>
      %</td>
  </tr>
  <tr>
    <td>Factor de Forma :</td>
    <td><select name="FactordeFormabs">
      <option value="1">1</option>
      <option value="0.80">0.80</option>
    </select>
      %</td>
  </tr>
  <tr>
    <td>Factor de Servicios :</td>
    <td><select name="FactordeServiciosbs">
      <option value="1">1</option>
      <option value="0.80">0.80</option>
    </select>
      %</td>
  </tr>
  <tr>
    <td>Factor de Comerciabilidad :</td>
    <td><select name="FactordeComerciabilidadbs">
      <option value="1">1</option>
      <option value="0.80">0.80</option>
    </select>
      %</td>
  </tr>
  <tr>
    <td>VALOR COMERCIAL MT2 TOTAL (BS): </td>
    <td><input type="text" name="VALORCOMERCIALMT2TOTALbs" size="10" class="cajaVerde"/>
    BS</td>
  </tr>
  <tr>
    <td> VALOR TOTAL COMERCIAL DEL TERRENO (BS): </td>
    <td><input type="text" name="VALORTOTALCOMERCIALDELTERRENObs" size="10" class="cajaVerde"/>
    BS</td>
  </tr>
</table>
</p>
</article>';
        return $sHTM;
    }

    function Calculodelvalortecnicocomercialdelaconstruccion() {
        $objTabla10Controlador = new Tabla10__Controlador;
        $arrayTabla10 = $objTabla10Controlador->getArrayDatosTabla10($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
		<h3>10. Cálculo del valor técnico comercial de la construcción-</h3>
<table width="70%" border="0" class="Tabla3">
  <tr>
    <td>Superficie construida :</td>
    <td><input type="text" name="SuperficieConstruida10" id="SuperficieConstruida10" size="10" value="' . $arrayTabla10["Superficie_Construida"] . '" />
      MT2</td>
  </tr>
  <tr>
    <td>Valor comercial por MT2 construido:</td>
    <td><input type="text" name="ValorcomercialporMTconstruido10" id="ValorcomercialporMTconstruido10" size="10" class="cajaAzul"value="' . $arrayTabla10["Valor_Comercial_Mt2_Construido"] . '" />
      SUS</td>
  </tr>
  <tr>
    <td>Factor de depreciación :</td>
    <td><input type="text" name="FactordeDepreciacion10" id="FactordeDepreciacion10" size="4" value="' . $arrayTabla10["Factor_Depreciacion"] . '" />%
      </td>
  </tr>
  <tr>
    <td>VALOR TOTAL DE LA CONSTRUCCION MT2 : </td>
    <td><input type="text" name="VALORTOTALDELACONSTRUCCION10" id="VALORTOTALDELACONSTRUCCION10" size="10" class="cajaAzul" value="' . $arrayTabla10["Valor_Total_Construccion_Mt2"] . '" />
    SUS</td>
  </tr>
  <tr>
    <td> VALOR TOTAL COMERCIAL DE LA CONSTRUCCION: </td>
    <td><input type="text" name="VALORTOTALCOMERCIALDELTERRENO10" id="VALORTOTALCOMERCIALDELTERRENO10" size="10" class="cajaAzul" value="' . $arrayTabla10["Valor_Total_Construccion"] . '" />
    SUS</td>
  </tr>
</table>
</p>
</article>';
        return $sHTM;
    }

    function TOTALESAVALUOTECNICOCOMERCIALDELINMUEBLE($Tipo) {
        $objTabla11Controlador = new Tabla11__Controlador;
        $arrayTabla11 = $objTabla11Controlador->getArrayDatosTabla11($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article>
	<h3>11. Totales .-		 </h3>
  <table width="100%" border="0" class="Tabla3" bgcolor="#FF0000">
    <tr>
      <td colspan="4" bgcolor="#33FF33"> AVALUO TECNICO COMERCIAL DEL INMUEBLE</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>VALOR UNITARIO</td>
      <td>SUPERFICIE</td>
      <td>TOTAL</td>
    </tr>';
        if ($Tipo == "Departamento") {
            $sHTM.='';
        } else {
            $sHTM.='<tr>
      <td>VALOR DEL TERRENO</td>
      <td><input type="text" name="VALORDELTERRENO11" id="VALORDELTERRENO11" value="' . $arrayTabla11["Valor_Unitario_T"] . '" /></td>
      <td><input type="text" id="VALORDELTERRENOSUPERFICIE11" name="VALORDELTERRENOSUPERFICIE11" value="' . $arrayTabla11["Superficie_T"] . '"/></td>
      <td><input type="text" id="VALORDELTERRENOTOTAL11" name="VALORDELTERRENOTOTAL11" value="' . $arrayTabla11["Total_T"] . '"/></td>
    </tr>';
        }
        if ($Tipo == "Terreno") {
            $sHTM.='';
        } else {
            $sHTM.='<tr>
      <td>VALOR DE LA CONSTRUCCIÓN</td>
      <td><input type="text" name="VALORDELACONSTRUCCION11" id="VALORDELACONSTRUCCION11" value="' . $arrayTabla11["Valor_Unitario_C"] . '"/></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONSUPERFICIE11" id="VALORDELACONSTRUCCIONSUPERFICIE11" value="' . $arrayTabla11["Superficie_C"] . '"/></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONTOTAL11" id="VALORDELACONSTRUCCIONTOTAL11" value="' . $arrayTabla11["Total_C"] . '"/></td>
    </tr>';
        }
        $sHTM.='<tr>
      <td colspan="4" bgcolor="#00FFCC">&nbsp;</td>
    </tr>
    <tr>
      <td> VALOR  COMERCIAL TOTAL: </td>
      <td>&nbsp;</td>
      <td align="right"><strong>SUS</strong></td>
      <td><input type="text" name="VALORCOMERCIALTOTAL11" id="VALORCOMERCIALTOTAL11" class="cajaAzul" value="' . $arrayTabla11["Valor_Comercial_Total"] . '" /></td>
    </tr>
  </table>
  </article">';
        return $sHTM;
    }

    function TOTALESVALORHIPOTECARIO($Tipo) {
        $objTabla112Controlador = new Tabla112__Controlador;
        $arrayTabla112 = $objTabla112Controlador->getArrayDatosTabla112($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<p>&nbsp;</p>
					<article class="post"><table width="100%" border="0" class="Tabla3" bgcolor="#FF0000">
    <tr>
      <td colspan="4" bgcolor="#33FF33"> VALOR HIPOTECARIO</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>VALOR COMERCIAL</td>
      <td>PORCENTAJE</td>
      <td>TOTAL</td>
    </tr>
    <tr>';
        if ($Tipo == "Departamento") {
            $sHTM.='';
        } else {
            $sHTM.='
      <td>VALOR DEL TERRENO</td>
      <td><input type="text" name="VALORDELTERRENOHIPOTECARIOH" id="VALORDELTERRENOHIPOTECARIOH" value="' . $arrayTabla112["Valor_Comercial_T"] . '" /></td>
      <td><input type="text" name="VALORDELTERRENOPORCENTAJEHIPOTECARIO" id="VALORDELTERRENOPORCENTAJEHIPOTECARIO" value="0.85" /></td>
      <td><input type="text" name="VALORDELTERRENOTOTALHIPOTECARIO" id="VALORDELTERRENOTOTALHIPOTECARIO" value="' . $arrayTabla112["Total_T"] . '"/></td>
    </tr>';
        }
        if ($Tipo == "Terreno") {
            $sHTM.='';
        } else {
            $sHTM.='<tr>
      <td>VALOR DE LA CONSTRUCCIÓN</td>
      <td><input type="text" name="VALORDELACONSTRUCCIONHIPOTECARIO" id="VALORDELACONSTRUCCIONHIPOTECARIO" value="' . $arrayTabla112["Valor_Comercial_C"] . '"/></td>
      <td><input type="text" id="VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO" name="VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO" value="0.85" /></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONTOTALHIPOTECARIO" id="VALORDELACONSTRUCCIONTOTALHIPOTECARIO" value="' . $arrayTabla112["Total_C"] . '"/></td>
    </tr>';
        }
        $sHTM.='<tr>
      <td colspan="4" bgcolor="#00FFCC">&nbsp;</td>
    </tr>
    <tr>
      <td> VALOR  HIPOTECARIO: </td>
      <td>&nbsp;</td>
      <td align="right"><strong>SUS</strong></td>
      <td><input type="text" name="VALORHIPOTECARIO" id="VALORHIPOTECARIO" class="cajaAzul" value="' . $arrayTabla112["Valor_Hipotecario"] . '" /></td>
    </tr>
  </table>
  <p>&nbsp;</p></article>';
        return $sHTM;
    }

    function TOTALESAVALUOCATASTRALFINALDELINMUEBLE($Tipo) {
        $objTabla113Controlador = new Tabla113__Controlador;
        $arrayTabla113 = $objTabla113Controlador->getArrayDatosTabla113($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post"><table width="100%" border="0" class="Tabla3" bgcolor="#FF0000">
    <tr>
      <td colspan="4" bgcolor="#33FF33"> AVALUO CATASTRAL FINAL DEL INMUEBLE</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>VALOR UNITARIO</td>
      <td>SUPERFICIE</td>
      <td>TOTAL</td>
    </tr>
    <tr>';
        if ($Tipo == "Departamento") {
            $sHTM.='';
        } else {
            $sHTM.='
      <td>VALOR DEL TERRENO</td>
      <td><input type="text" name="VALORDELTERRENOINMUEBLE" id="VALORDELTERRENOINMUEBLE" value="' . $arrayTabla113["Valor_Unitario_T"] . '" /></td>
      <td><input type="text" name="VALORDELTERRENOSUPERFICIEINMUEBLE"  id="VALORDELTERRENOSUPERFICIEINMUEBLE" value="' . $arrayTabla113["Superficie_T"] . '" /></td>
      <td><input type="text" name="VALORDELTERRENOTOTALINMUEBLE" id="VALORDELTERRENOTOTALINMUEBLE" value="' . $arrayTabla113["Total_T"] . '"/></td>
    </tr>';
        }
        if ($Tipo == "Terreno") {
            $sHTM.='';
        } else {
            $sHTM.='<tr>
      <td>VALOR DE LA CONSTRUCCIÓN</td>
      <td><input type="text" name="VALORDELACONSTRUCCIONINMUEBLE" id="VALORDELACONSTRUCCIONINMUEBLE" value="' . $arrayTabla113["Valor_Unitario_C"] . '" /></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE" id="VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE" value="' . $arrayTabla113["Superficie_C"] . '" /></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONTOTALINMUEBLE" id="VALORDELACONSTRUCCIONTOTALINMUEBLE" value="' . $arrayTabla113["Total_C"] . '" /></td>
    </tr>';
        }
        $sHTM.='<tr>
      <td colspan="4" bgcolor="#00FFCC">&nbsp;</td>
    </tr>
    <tr>
      <td> VALOR  CATASTRAL TOTAL: </td>
      <td>&nbsp;</td>
      <td align="right"><strong>BS</strong></td>
      <td><input type="text" name="VALORCATASTRALTOTALBS" id="VALORCATASTRALTOTALBS" class="cajaVerde" value="' . $arrayTabla113["Valor_Catastral_Total_Bs"] . '" /></td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#00FFCC">&nbsp;</td>
    </tr>
    <tr>
      <td> VALOR  CATASTRAL TOTAL: </td>
      <td></td>
      <td align="right"><strong>SUS</strong></td>
      <td><input type="text" name="VALORCATASTRALTOTALSUS" id="VALORCATASTRALTOTALSUS" class="cajaAzul" value="' . $arrayTabla113["Valor_Catastral_Total"] . '" /></td>
    </tr>
  </table></article>';
        return $sHTM;
    }

    function VALORDELIQUIDACIONOVENTARAPIDA($Tipo) {
        $objTabla114Controlador = new Tabla114__Controlador;
        $arrayTabla114 = $objTabla114Controlador->getArrayDatosTabla114($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
		<table width="100%" border="0" class="Tabla3" bgcolor="#FF0000">
    <tr>
      <td colspan="4" bgcolor="#33FF33"> VALOR DE LIQUIDACION O VENTA RAPIDA</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>VALOR COMERCIAL</td>
      <td>PORCENTAJE</td>
      <td>TOTAL</td>
    </tr>';
        if ($Tipo == "Departamento") {
            $sHTM.='';
        } else {
            $sHTM.='
    <tr>
      <td>VALOR DEL TERRENO</td>
      <td><input type="text" name="VALORDELTERRENOLIQUIDACION" id="VALORDELTERRENOLIQUIDACION" value="' . $arrayTabla114["Valor_Comercial_T"] . '" /></td>
      <td><input type="text" name="VALORDELTERRENOPORCENTAJELIQUIDACION" id="VALORDELTERRENOPORCENTAJELIQUIDACION" value="0.75"/></td>
      <td><input type="text" name="VALORDELTERRENOTOTALLIQUIDACION" id="VALORDELTERRENOTOTALLIQUIDACION" value="' . $arrayTabla114["Total_T"] . '" /></td>
    </tr>';
        }
        if ($Tipo == "Terreno") {
            $sHTM.='';
        } else {
            $sHTM.='<tr>
      <td>VALOR DE LA CONSTRUCCIÓN</td>
      <td><input type="text" name="VALORDELACONSTRUCCIONLIQUIDACION" id="VALORDELACONSTRUCCIONLIQUIDACION" value="' . $arrayTabla114["Valor_Comercial_C"] . '" /></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION" id="VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION" value="0.75" /></td>
      <td><input type="text" name="VALORDELACONSTRUCCIONTOTALLIQUIDACION" id="VALORDELACONSTRUCCIONTOTALLIQUIDACION" value="' . $arrayTabla114["Total_C"] . '" /></td>
    </tr>';
        }
        $sHTM.='<tr>
      <td colspan="4" bgcolor="#00FFCC">&nbsp;</td>
    </tr>
    <tr>
      <td> VALOR  DE LIQUIDACION O VENTA RAPIDA: </td>
      <td>&nbsp;</td>
      <td align="right"><strong>SUS</strong></td>
      <td><input type="text" name="VALORLIQUIDACION" id="VALORLIQUIDACION" class="cajaAzul" value="' . $arrayTabla114["Valor_Liquidacion_Venta_Rapida"] . '" /></td>
    </tr>
  </table>
  </article>';
        return $sHTM;
    }

    function CONCLUSIONES() {
        $objTabla115Controlador = new Tabla115__Controlador;
        $arrayTabla115 = $objTabla115Controlador->getArrayDatosTabla115($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
		<p>CONCLUSIONES</p>
  <table width="50%" border="0" bordercolor="#3399FF" class="Tabla3">
      <tr><td bgcolor="#00FFCC">1. <input type="text" size="40" name="observacionesfinales" id="observacionesfinales" value="' . $arrayTabla115["Conclusion"] . '"/></td></tr>
	  <tr><td bgcolor="#00FFCC">2. <input type="text" size="40" name="observacionesfinales2" id="observacionesfinales2" value="' . $arrayTabla115["Conclusion2"] . '"/></td></tr>
	  <tr><td bgcolor="#00FFCC">3. <input type="text" size="40" name="observacionesfinales3" id="observacionesfinales3" value="' . $arrayTabla115["Conclusion3"] . '"/></td></tr>
	  <tr><td bgcolor="#00FFCC">4. <input type="text" size="40" name="observacionesfinales4" id="observacionesfinales4" value="' . $arrayTabla115["Conclusion4"] . '"/></td></tr>
	  <tr><td bgcolor="#00FFCC">5. <input type="text" size="40" name="observacionesfinales5" id="observacionesfinales5" value="' . $arrayTabla115["Conclusion5"] . '"/></td></tr>
	  <tr><td bgcolor="#00FFCC">6. <input type="text" size="40" name="observacionesfinales6" id="observacionesfinales6" value="' . $arrayTabla115["Conclusion6"] . '"/></td></tr>
  </table>
  <article>';
        return $sHTM;
    }

    function CARTA() {
        $objTabla119Controlador = new Tabla119__Controlador;
        $arrayTabla119 = $objTabla119Controlador->getArrayDatosTabla119($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
		<p>CARTA</p>
  <table width="100%" border="0" bordercolor="#3399FF" class="Tabla3">
      <tr>
      <td bgcolor="#00FFCC">		<p>CARTA DIRIGIDA AL SEÑOR O SEÑORES:</p>
      <input type="text" name="nombre_carta" id="nombre_carta" value="' . $arrayTabla119["Nombre"] . '"/></td>
    </tr>
     <tr>
      <td bgcolor="#00FFCC">		<p>CARTA DIRIGIDA A LA EMPRESA:</p>
      <input type="text" name="empresa_carta" id="empresa_carta" value="' . $arrayTabla119["Empresa"] . '"/></td>
    </tr>
     <tr>
      <td bgcolor="#00FFCC">		<p>REF :</p>
      <input type="text" name="titulo_carta" id="titulo_carta" value="' . $arrayTabla119["Titulo"] . '"/></td>
    </tr>
    <tr>
      <td bgcolor="#00FFCC">		<p>CARTA</p>
      <textarea name="cartas" id="cartas" cols="65" rows="5">' . $arrayTabla119["Carta"] . '</textarea></td>
    </tr>
  </table>
  <article>';
        return $sHTM;
    }

    function TABLATOTALDEVALORES() {
        $sHTM = '';
        $sHTM.='<article class="post"><p>TABLA TOTAL DE VALORES</p>
  <table width="100%" border="0" bordercolor="#FF0000" class="Tabla4">
    <tr>
      <td width="57%">VALOR COMERCIAL</td>
      <td width="19%"><input type="text" name="VALORCOMERCIALTOTALESSUS" id="VALORCOMERCIALTOTALESSUS" class="cajaAzul"/></td>
      <td width="24%">SUS</td>
    </tr>
    <tr>
      <td>VALOR NETO DE REALIZACION O HIPOTECARIO</td>
      <td><input type="text" name="VALORHIPOTECARIOTOTALESSUS" id="VALORHIPOTECARIOTOTALESSUS" class="cajaAzul"/></td>
      <td>SUS</td>
    </tr>
    <tr>
      <td>VALOR CATASTRAL</td>
      <td><input type="text" name="VALORCATASTRALTOTALESSUS" id="VALORCATASTRALTOTALESSUS"  class="cajaAzul"/></td>
      <td>SUS</td>
    </tr>
    <tr>
      <td> VALOR  DE LIQUIDACION O VENTA RAPIDA: </td>
      <td><input type="text" name="VALORLIQUIDACIONTOTALESSUS" id="VALORLIQUIDACIONTOTALESSUS" class="cajaAzul"/></td>
      <td>SUS</td>
    </tr>
  </table>
  </article>';
        return $sHTM;
    }

    function TABLATOTALVALORESBS() {
        $sHTM = '';
        $sHTM.='<article class="post">
		<p>TABLA TOTAL VALORES BS</p>
<table width="100%" border="0" bordercolor="#FF0000" class="Tabla4">
    <tr>
      <td width="57%">VALOR COMERCIAL</td>
      <td width="19%"><input type="text" name="VALORCOMERCIALTOTALESBS" id="VALORCOMERCIALTOTALESBS" class="cajaVerde"/></td>
      <td width="24%">BS</td>
    </tr>
    <tr>
      <td>VALOR NETO DE REALIZACION O HIPOTECARIO</td>
      <td><input type="text" name="VALORHIPOTECARIOTOTALESBS" id="VALORHIPOTECARIOTOTALESBS" class="cajaVerde"/></td>
      <td>BS</td>
    </tr>
    <tr>
      <td>VALOR CATASTRAL</td>
      <td><input type="text" name="VALORCATASTRALTOTALESBS" id="VALORCATASTRALTOTALESBS" class="cajaVerde"/></td>
      <td>BS</td>
    </tr>
    <tr>
      <td> VALOR  DE LIQUIDACION O VENTA RAPIDA: </td>
      <td><input type="text" name="VALORLIQUIDACIONTOTALESBS" id="VALORLIQUIDACIONTOTALESBS" class="cajaVerde"/></td>
      <td>BS</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</footer>
</article>';
        return $sHTM;
    }

}

?>