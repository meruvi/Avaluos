<?php

/* * *****************************************************************
 * Clase: CCalculo
 * @copyright 2010
 * ***************************************************************** */

////////////////////////////////////////////////////////////////////
require 'common/lib/Cliente_Controlador.php';
require 'common/lib/Tabla0_Controlador.php';
require 'common/lib/Tabla1_Controlador.php';
require 'common/lib/Tabla2_Controlador.php';
require 'common/lib/Tabla3_Controlador.php';
require 'common/lib/Tabla4_Controlador.php';
require 'common/lib/Tabla5_Controlador.php';
require 'common/lib/Tabla6_Controlador.php';
require 'common/lib/Tabla62_Controlador.php';

class CDatosAvaluo {

    var $objClienteControlador;

    function __construct() {
        $this->objClienteControlador = new Cliente_Controlador;
    }

    //desde aqui los divs de temoniage

    function ParteIzquierda($Tipo) {
        $arrayDatosCliente = $this->objClienteControlador->getArrayDatosTabla0($_SESSION['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<table style="
    margin-top: 100px;
">';
        if ($Tipo == "Departamento") {
            $sHTM.='<tr><td>Tipo de Inmueble :</td><td>
                        <select name="TipoDeInmueble" id="TipoDeInmueble">
                        <option value="Departamento" selected="selected">Departamento</option>';
            $sHTM .='   </select>
	</td></tr>';
        } else {
            
            if ($Tipo == "Terreno"||$Tipo=="Garaje") {

                $sHTM.='<tr><td>Tipo de Inmueble :</td><td>
                        <select name="TipoDeInmueble" id="TipoDeInmueble">
                       
                        <option value="'.$Tipo.'" selected="selected">'.$Tipo.'</option>';
                $sHTM .='   </select>
	</td></tr>';
            
            } else {
                $sHTM.='</br><tr><td>Tipo de Inmueble :</td><td>
	<select name="TipoDeInmueble" id="TipoDeInmueble">';
                if ($arrayDatosCliente['Tipo_Inmueble'] == "Terreno" || $arrayDatosCliente['Tipo_Inmueble'] =="Garaje") {
                    $sHTM .='<option value="Terreno" selected="selected">Terreno</option>';
                } else {
                    $sHTM .='<option value="Terreno">Terreno</option>';
                }
                if ($arrayDatosCliente['Tipo_Inmueble'] == "Vivienda") {
                    $sHTM .='<option value="Vivienda" selected="selected">Vivienda</option>';
                } else {
                    $sHTM .='<option value="Vivienda">Vivienda</option>';
                }
                if ($arrayDatosCliente['Tipo_Inmueble'] == "Comercio") {
                    $sHTM .='<option value="Comercio" selected="selected">Comercio</option>';
                } else {
                    $sHTM .='<option value="Comercio">Comercio</option>';
                }
                if ($arrayDatosCliente['Tipo_Inmueble'] == "Departamento") {
                    $sHTM .='<option value="Departamento" selected="selected">Departamento</option>';
                } else {
                    $sHTM .='<option value="
                    ">Departamento</option>';
                }
                  if ($arrayDatosCliente['Tipo_Inmueble'] == "Fabrica") {
                    $sHTM .='<option value="Fabrica" selected="selected">Fabrica</option>';
                } else {
                    $sHTM .='<option value="Fabrica">Fabrica</option>';
                }
                $sHTM .='</select>
	</td></tr>';
            }
        }
        if ($Tipo != "Departamento") {
            $sHTM.='<tr><td>Factor de Inclinacion  :</td><td>
	<select name="Factordeinclinacionp" id="FactordeinclinacionP">';
            $sHTM.='<option value="1">Seleccione</option>';
            if ($arrayDatosCliente['Factor_Inclinacion'] == "1") {
                $sHTM.='<option value="1" selected="selected">1</option>';
            } else {
                $sHTM.='<option value="1">1</option>';
            }
            if ($arrayDatosCliente['Factor_Inclinacion'] == "0.90") {
                $sHTM.='<option value="0.90" selected="selected">0.90</option>';
            } else {
                $sHTM.='<option value="0.90">0.90</option>';
            }
            if ($arrayDatosCliente['Factor_Inclinacion'] == "0.80") {
                $sHTM.='<option value="0.80" selected="selected">0.80</option>';
            } else {
                $sHTM.='<option value="0.80">0.80</option>';
            }
            $sHTM.='</select>
		</td><tr>';

            $sHTM.='<tr><td>Factor de Forma  :</td><td>
	<select name="Factordeformap" id="FactordeformaP">
	<option value="1">Seleccione</option>';

            if ($arrayDatosCliente['Factor_Forma'] == "1") {
                $sHTM.='<option value="1" selected="selected">1</option>';
            } else {
                $sHTM.='<option value="1">1</option>';
            }
            if ($arrayDatosCliente['Factor_Forma'] == "0.80") {
                $sHTM.='<option value="0.80" selected="selected">0.80</option>';
            } else {
                $sHTM.='<option value="0.80">0.80</option>';
            }
            if ($arrayDatosCliente['Factor_Forma'] == "0.90") {
                $sHTM.='<option value="0.90" selected="selected">0.90</option>';
            } else {
                $sHTM.='<option value="0.90">0.90</option>';
            }

            $sHTM.='</select>
		</td><tr>';
            $sHTM.='<tr><td>Factor de Comerciablidad  :</td><td>
	<select name="FactordeComerciabilidadP" id="FactordeComerciabilidadP">
	<option value="1">Seleccione</option>';

            if ($arrayDatosCliente['Factor_Comerciabilidad'] == "1") {
                $sHTM.='<option value="1" selected="selected">1</option>';
            } else {
                $sHTM.='<option value="1">1</option>';
            }
            if ($arrayDatosCliente['Factor_Comerciabilidad'] == "0.80") {
                $sHTM.='<option value="0.80" selected="selected">0.80</option>';
            } else {
                $sHTM.='<option value="0.80">0.80</option>';
            }
            if ($arrayDatosCliente['Factor_Comerciabilidad'] == "0.90") {
                $sHTM.='<option value="0.90" selected="selected">0.90</option>';
            } else {
                $sHTM.='<option value="0.90">0.90</option>';
            }
            if ($arrayDatosCliente['Factor_Comerciabilidad'] == "0.40") {
                $sHTM.='<option value="0.40" selected="selected">0.40</option>';
            } else {
                $sHTM.='<option value="0.40">0.40</option>';
            }
            if ($arrayDatosCliente['Factor_Comerciabilidad'] == "0.20") {
                $sHTM.='<option value="0.20" selected="selected">0.20</option>';
            } else {
                $sHTM.='<option value="0.20">0.20</option>';
            }

            $sHTM.='</select>';
        }
        $sHTM.='</td></tr>';
        $sHTM.='</table>';

        return $sHTM;
    }

    function PrimerosDatos($Tipo) {
        $objTabla0Controlador = new Tabla0__Controlador;
        $arrayTabla0 = $objTabla0Controlador->getArrayDatosTabla0($_SESSION['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<table>';
        if ($Tipo != "Departamento") {
            $sHTM.='<tr><td>Superficie del Lote :</td><td><input type="text" name="SuperficiedelLote2" id="SuperficiedelLote2" size="7" value="' . $arrayTabla0['Superficie_Lote'] . '" />MT2</td><tr>';
        }
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM.='';
        } else {
            $sHTM.='<tr><td>Superficie construida :</td><td><input type="text" name="SuperficieConstruida2" id="SuperficieConstruida2" size="7" value="' . $arrayTabla0['Superficie_Construida'] . '" />MT2</td><tr>';
        }
        if ($Tipo != "Departamento") {
            $sHTM.='<tr><td>Valor Impositivo por MT2 :</td><td><input type="text" name="ValorImpositivopormetrocuadrado" id="ValorImpositivopormetrocuadrado" size="7" value="' . $arrayTabla0['Valor_Impositivo_Mt2'] . '" />BS.</td><tr>';
            $sHTM.='<tr><td>Valor Comercial por MT2 :</td><td><input type="text" name="ValorcomercialporMT2P" id="ValorcomercialporMT2P" size="7" value="' . $arrayTabla0['Valor_Comercial_Mt2'] . '" /> 
		SUS</td><tr>';
        }
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM.='';
        } else {
            $sHTM.='<tr><td>Valor Comercial por MT2 Construido :</td><td><input type="text" name="ValorcomercialporMT2ConstrP" id="ValorcomercialporMT2ConstrP" size="7" value="' . $arrayTabla0['Valor_Comercial_Mt2_Construido'] . '" /> 
		SUS</td><tr>';
        }
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM.='';
        } else {
            $sHTM.='<tr><td>Valor catastral por M2 Construido :</td><td><input type="text" name="ValorcatastralpormetrocuadradoconstruidoP" id="ValorcatastralpormetrocuadradoconstruidoP" value="' . $arrayTabla0['Valor_Catastral_Mt2_Construido'] . '" />BS 
		SUS</td><tr>';
        }
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM.='';
        } else {
            $sHTM.='<tr><td>Años de vida(Considerar para el factor de Depreciación) :</td><td>
	<select name="Anosdevida" id="Anosdevida">
	<option value="">Seleccione</option>';

            if ($arrayTabla0['Anos_Vida'] == "0.975") {
                $sHTM.='<option value="1" selected="selected">De 0 a 5</option>';
            } else {
                $sHTM.='<option value="1">De 0 a 5</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.975") {
                $sHTM.='<option value="0.975" selected="selected">Mas de 6 a 10</option>';
            } else {
                $sHTM.='<option value="0.975">Mas de 6 a 10</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.925") {
                $sHTM.='<option value="0.925" selected="selected">Mas de 11 a 15</option>';
            } else {
                $sHTM.='<option value="0.925">Mas de 11 a 15</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.900") {
                $sHTM.='<option value="0.900" selected="selected">Mas de 16 a 20</option>';
            } else {
                $sHTM.='<option value="0.900">Mas de 16 a 20</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.850") {
                $sHTM.='<option value="0.850" selected="selected">Mas de 21 a 25</option>';
            } else {
                $sHTM.='<option value="0.850">Mas de 21 a 25</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.800") {
                $sHTM.='<option value="0.800" selected="selected">Mas de 26 a 30</option>';
            } else {
                $sHTM.='<option value="0.800">Mas de 26 a 30</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.700") {
                $sHTM.='<option value="0.700" selected="selected">Mas de 36 a 40</option>';
            } else {
                $sHTM.='<option value="0.700">Mas de 36 a 40</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.650") {
                $sHTM.='<option value="0.650" selected="selected">Mas de 41 a 45</option>';
            } else {
                $sHTM.='<option value="0.650">Mas de 41 a 45</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.600") {
                $sHTM.='<option value="0.600" selected="selected">Mas de 46 a 50</option>';
            } else {
                $sHTM.='<option value="0.600">Mas de 46 a 50</option>';
            }

            if ($arrayTabla0['Anos_Vida'] == "0.600") {
                $sHTM.='<option value="0.550" selected="selected">Mas de 51</option>';
            } else {
                $sHTM.='<option value="0.550">Mas de 51</option>';
            }
            $sHTM.='</select>Años
	</td><tr>';
        }

        $sHTM.='<tr><td>Tipo de cambio dolar</td><td><input name="TIPOCAMBIO" id="TIPOCAMBIO" value="6.86" type="text" size="4" /></td><tr>';
        if ($Tipo == "Departamento") {
            $sHTM.='<tr><td><div id="Info"></div><input type="hidden" value="' . $_SESSION['CodigoAvaluo'] . '" name="codAvaluo" id="codAvaluo" /><input type="submit" value="Actualizar Datos" name="imprimir" id="imprimir" class="botonImprimir" /></td><td align="right"><a href="pdf/avaluo_departamento.php?CodigoAvaluo=' . $_SESSION['CodigoAvaluo'] . '" target="_blank"><div id="imagen"> </div></a></td><tr>';
        } else {
            if ($Tipo == "Terreno"||$Tipo == "Garaje") {
                $sHTM.='<tr><td><div id="Info"></div><input type="hidden" value="' . $_SESSION['CodigoAvaluo'] . '" name="codAvaluo" id="codAvaluo" /><input type="submit" value="Actualizar Datos" name="imprimir" id="imprimir" class="botonImprimir" /></td><td align="right"><a href="pdf/avaluo_terreno.php?CodigoAvaluo=' . $_SESSION['CodigoAvaluo'] . '" target="_blank"><div id="imagen"> </div></a></td><tr>';
            } else {
                $sHTM.='<tr><td><div id="Info"></div><input type="hidden" value="' . $_SESSION['CodigoAvaluo'] . '" name="codAvaluo" id="codAvaluo" /><input type="submit" value="Actualizar Datos" name="imprimir" id="imprimir" class="botonImprimir" /></td><td align="right"><a href="pdf/avaluo.php?CodigoAvaluo=' . $_SESSION['CodigoAvaluo'] . '" target="_blank"><div id="imagen"> </div></a></td><tr>';
            }
        }
        $sHTM.='</table>';


        return $sHTM;
    }

    function cargaImagen() {
        $arrayDatosCliente = $this->objClienteControlador->getArrayDatosTabla0($_SESSION['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<img src="./fotos/' . $_SESSION["CodigoAvaluo"] . '/' . $arrayDatosCliente['Foto1'] . '" width="204" height="128" alt="img1">';

        return $sHTM;
    }

    function InformacionGeneral() {
        $arrayDatosCliente = $this->objClienteControlador->getArrayDatosTabla1($_SESSION['CodigoAvaluo']);
        $objTabla1Controlador = new Tabla1__Controlador;
        $arrayTabla1 = $objTabla1Controlador->getArrayDatosTabla1($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<div id="leftcontainer">
<h2 class="mainheading">
Caracteristicas y calculo
</h2>
<article class="post">
<header>
<h3>1. Información General</h3>
<table width="60%" class="Tabla1">
	<tr>
		<td>
		Soliciatante :
		</td>
		<td>
		<input type="text" name="NombreSolicitante" id="NombreSolicitante" value="' . $arrayDatosCliente["Solicitante"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Propietario :
		</td>
		<td>
		<input type="text" name="Propietario" id="Propietario" value="' . $arrayDatosCliente["Propietario"] . '">
		</td>
	</tr>
    <tr>
        <td>
        Ciudad :
        </td>
        <td>
        <input type="text" name="Ciudad" id="Ciudad" value="' . $arrayDatosCliente["Ciudad"] . '">
        </td>
    </tr>
	
	<tr>
		<td>
		Zona :
		</td>
		<td>
		<select name="Zona" id="Zona">';
        if ($arrayTabla1["Zona"] == "Sur") {
            $sHTM .='<option value="Sur" selected="selected">Sur</option>';
        } else {
            $sHTM .='<option value="Sur">Sur</option>';

        }
        if ($arrayTabla1["Zona"] == "Centro") {
            $sHTM .='<option value="Centro" selected="selected">Centro</option>';
        } else {
            $sHTM .='<option value="Centro">Centro</option>';
        }
        if ($arrayTabla1["Zona"] == "Norte") {
            $sHTM .='<option value="Norte" selected="selected">Norte</option>';
        } else {
            $sHTM .='<option value="Norte">Norte</option>';
        }

        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Urbanización :
		</td>
		<td>
		<input type="text" name="Urbanizacion" id="Urbanizacion" value="' . $arrayDatosCliente["Urbanizacion"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Dirección :
		</td>
		<td>
		<input type="text" name="Direccion" id="Direccion" value="' . $arrayTabla1["Direccion"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Manzana :
		</td>
		<td>
		<input type="text" name="Manzana" id="Manzana" value="' . $arrayTabla1["Manzana"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Lote :
		</td>
		<td>
		<input type="text" name="Lote" id="Lote" value="' . $arrayTabla1["Lote"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Testimonio :
		</td>
		<td>
		<input type="text" name="Testimonio" id="Testimonio" value="' . $arrayTabla1["Testimonio"] . '">
		</td>
	</tr>
	<tr>
		<td>
		Folio real :
		</td>
		<td>
		<input type="text" id="Folioreal" name="Folioreal" value="' . $arrayTabla1["Folio_Real"] . '">
		</td>
	</tr>
	<tr>
	&nbsp;
	</tr>
	<tr>
	&nbsp;
	</tr>
	<tr>
		<td>
		CÓDIGO CATASTRAL :
		</td>
		<td>
		<input type="text" name="CODIGOCATASTRAL" id="CODIGOCATASTRAL" value="' . $arrayTabla1["Codigo_Catastral"] . '">
		</td>
	</tr>
	<tr>
		<td>
		ULTIMO IMPUESTO :
		</td>
		<td>
		<input type="text" id="ULTIMOIMPUESTO" name="ULTIMOIMPUESTO" value="' . $arrayTabla1["Ultimo_Impuesto"] . '">
		</td>
	</tr>
	<tr>
	&nbsp;
	</tr>
	<tr>
	&nbsp;
	</tr>
	<tr>
		<td>
		<h5>OBSERVACIONES :</h5>
		</td>
		<td>
		<textarea type="text" name="OBSERVACIONES2" id="OBSERVACIONES2" cols="29" rows="5">' . $arrayTabla1["Observaciones"] . '</textarea>
		</td>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';

        return $sHTM;
    }

    function TablaDeValores() {
        $objTabla116Controlador = new Tabla116__Controlador;
        $arrayTabla116 = $objTabla116Controlador->getArrayDatosTabla116($_GET['CodigoAvaluo']);
        $objTabla117Controlador = new Tabla117__Controlador;
        $arrayTabla117 = $objTabla117Controlador->getArrayDatosTabla117($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>2. Tabla de Valores .-</h3>
</header>
<p>
<table width="80%" class="Tabla2">
	<tr>
		<td>
		VALOR COMERCIAL :
		</td>
		<td>
		<input type="text" name="VALORCOMERCIALBS2" id="VALORCOMERCIALBS2" size="10" class="cajaVerde" value="' . round($arrayTabla117["Valor_Comercial"], 2) . '"/>
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORCOMERCIALSUS2" id="VALORCOMERCIALSUS2" size="10" class="cajaAzul" value="' . $arrayTabla116["Valor_Comercial"] . '"/>
		</td>
		<td>
		SUS
		</td>
	</tr>
	<tr>
		<td>
		VALOR NETO DE REALIZACIÓN O HIPOTECARIO :
		</td>
		<td>
		<input type="text" name="VALORNETODEREALIZACIONOHIPOTECARIOBS2" id="VALORNETODEREALIZACIONOHIPOTECARIOBS2" size="10" class="cajaVerde" value="' . $arrayTabla117["Valor_Hipotecario"] . '"/>
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORNETODEREALIZACIONOHIPOTECARIOSUS2" id="VALORNETODEREALIZACIONOHIPOTECARIOSUS2" size="10" class="cajaAzul" value="' . $arrayTabla116["Valor_Hipotecario"] . '"/>
		</td>
		<td>
		SUS
		</td>
	</tr>
	<tr>
		<td>
		VALOR CATASTRAL :
		</td>
		<td>
		<input type="text" name="VALORCATASTRALBS" id="VALORCATASTRALBS" size="10" class="cajaVerde" value="' . $arrayTabla117["Valor_Catastral"] . '"/>
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORCATASTRALSUS2" id="VALORCATASTRALSUS2" size="10" class="cajaAzul" value="' . $arrayTabla116["Valor_Catastral"] . '"/>
		</td>
		<td>
		SUS
		</td>
	</tr>
	<tr>
		<td>
		VALOR DE VENTA RÁPIDA O LIQUIDACIÓN :
		</td>
		<td>
		<input type="text" name="VALORDEVENTARAPIDAOLIQUIDACIONBS" id="VALORDEVENTARAPIDAOLIQUIDACIONBS" size="10" class="cajaVerde" value="' . $arrayTabla117["Valor_Liquidacion"] . '"/>
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORDEVENTARAPIDAOLIQUIDACIONSUS2" id="VALORDEVENTARAPIDAOLIQUIDACIONSUS2" size="10" class="cajaAzul" value="' . $arrayTabla116["Valor_Liquidacion"] . '"/>
		</td>
		<td>
		SUS
		</td>
	</tr>
</table>
</p>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';
        return $sHTM;
    }

    function CaracteristicasDeLaZona() {
        $objTabla3Controlador = new Tabla3__Controlador;
        $arrayTabla3 = $objTabla3Controlador->getArrayDatosTabla3($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM .='<article class="post">
<header>
<h3>3. Caractristicas de la zona y datos urbanos.-</h3>
</header>
<p>
<table width="70%" class="Tabla1" >

<tr>
        <td>
        Uso de suelo :
        </td>
        <td>
        <input type="text" name="Usodesuelo" id="Usodesuelo" size="9" value="' . $arrayTabla3["Usodesuelo"] . '" />ML.
        </td>
    </tr>

	
	<tr>
		<td>
		Ancho de via :
		</td>
		<td>
		<input type="text" name="Anchodevia" id="Anchodevia" size="9" value="' . $arrayTabla3["Ancho_Via"] . '" />ML.
		</td>
	</tr>
	<tr>
		<td>
		Material de via :
		</td>
		<td>
		<select name="Materialdevia" id="Materialdevia">';
        if ($arrayTabla3["Material_Via"] == "Asfalto") {
            $sHTM .='<option value="Asfalto" selected="selected">Asfalto</option>';
        } else {
            $sHTM .='<option value="Asfalto">Asfalto</option>';
        }

        if ($arrayTabla3["Material_Via"] == "Piedra") {
            $sHTM .='<option value="Piedra" selected="selected">Piedra</option>';
        } else {
            $sHTM .='<option value="Piedra">Piedra</option>';
        }

        if ($arrayTabla3["Material_Via"] == "Tierra") {
            $sHTM .='<option value="Tierra" selected="selected">Tierra</option>';
        } else {
            $sHTM .='<option value="Tierra">Tierra</option>';
        }

        if ($arrayTabla3["Material_Via"] == "Loseta") {
            $sHTM .='<option value="Loseta" selected="selected">Loseta</option>';
        } else {
            $sHTM .='<option value="Loseta">Loseta</option>';
        }

        if ($arrayTabla3["Material_Via"] == "Cemento") {
            $sHTM .='<option value="Cemento" selected="selected">Cemento</option>';
        } else {
            $sHTM .='<option value="Cemento">Cemento</option>';
        }

        if ($arrayTabla3["Material_Via"] == "Pavimentorigido") {
            $sHTM .='<option value="Pavimentorigido" selected="selected">Pavimento rígido</option>';
        } else {
            $sHTM .='<option value="Pavimentorigido">Pavimento rígido</option>';
        }

        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Tipo de via :
		</td>
		<td>
		<select name="Tipodevia" id="Tipodevia">';

        if ($arrayTabla3["Tipo_Via"] == "Avenida") {
            $sHTM .='<option value="Avenida" selected="selected">Avenida</option>';
        } else {
            $sHTM .='<option value="Avenida">Avenida</option>';
        }

        if ($arrayTabla3["Tipo_Via"] == "Calle") {
            $sHTM .='<option value="Calle" selected="selected">Calle</option>';
        } else {
            $sHTM .='<option value="Calle">Calle</option>';
        }

        if ($arrayTabla3["Tipo_Via"] == "Callejon") {
            $sHTM .='<option value="Callejon" selected="selected">Callejon</option>';
        } else {
            $sHTM .='<option value="Callejon">Callejon</option>';
        }

        if ($arrayTabla3["Tipo_Via"] == "Pasaje") {
            $sHTM .='<option value="Callejon" selected="selected">Pasaje</option>';
        } else {
            $sHTM .='<option value="Pasaje">Pasaje</option>';
        }

        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Aceras :
		</td>
		<td>
		<select name="Aceras" id="Aceras">';
        if ($arrayTabla3["Aceras"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla3["Aceras"] == "No") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }


        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Transporte :
		</td>
		<td>
		<select name="Transporte" id="Transporte">';

        if ($arrayTabla3["Transporte"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla3["Transporte"] == "No") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }


        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Densidad de población :
		</td>
		<td>
		<select name="Densidaddepoblacion" id="Densidaddepoblacion">';
        if ($arrayTabla3["Densidad_Poblacion"] == "DB") {
            $sHTM .='<option value="DB" selected="selected">DB</option>';
        } else {
            $sHTM .='<option value="DB">DB</option>';
        }
        if ($arrayTabla3["Densidad_Poblacion"] == "DM") {
            $sHTM .='<option value="DM" selected="selected">DM</option>';
        } else {
            $sHTM .='<option value="DM">DM</option>';
        }
        if ($arrayTabla3["Densidad_Poblacion"] == "DB") {
            $sHTM .='<option value="DA" selected="selected">DA</option>';
        } else {
            $sHTM .='<option value="DA">DA</option>';
        }
        if ($arrayTabla3["Densidad_Poblacion"] == "DMB") {
            $sHTM .='<option value="DMB" selected="selected">DMB</option>';
        } else {
            $sHTM .='<option value="DMB">DMB</option>';
        }
        if ($arrayTabla3["Densidad_Poblacion"] == "DM") {
            $sHTM .='<option value="DM" selected="selected">DM</option>';
        } else {
            $sHTM .='<option value="DM">DM</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		<h5>DESCRIPCIÓN :</h5>
		</td>
		<td>
		<textarea name="Descripcion" id="Descripcion" cols="29" rows="5"/>' . $arrayTabla3["Descripcion"] . '</textarea>
		</td>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';
        return $sHTM;
    }

    function CaracteristicasdelTerreno($Tipo) {
        $objTabla4Controlador = new Tabla4__Controlador;
        $arrayTabla4 = $objTabla4Controlador->getArrayDatosTabla4($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>4. Características del Terreno</h3>
</header>
<p>
<table width="70%" class="Tabla1">
	<tr>
		<td>
		Acceso Via :
		</td>
		<td>
		<select name="AccesoVia" id="AccesoVia">';
        if ($arrayTabla4["Acceso_Via"] == "Avenida") {
            $sHTM .='<option value="Avenida" selected="selected">Avenida</option>';
        } else {
            $sHTM .='<option value="Avenida">Avenida</option>';
        }

        if ($arrayTabla4["Acceso_Via"] == "Calle") {
            $sHTM .='<option value="Calle" selected="selected">Calle</option>';
        } else {
            $sHTM .='<option value="Calle">Calle</option>';
        }

        if ($arrayTabla4["Acceso_Via"] == "Callejon") {
            $sHTM .='<option value="Callejon" selected="selected">Callejon</option>';
        } else {
            $sHTM .='<option value="Callejon">Callejon</option>';
        }

        if ($arrayTabla4["Acceso_Via"] == "Pasaje") {
            $sHTM .='<option value="Callejon" selected="selected">Pasaje</option>';
        } else {
            $sHTM .='<option value="Pasaje">Pasaje</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Superficie del Terreno :
		</td>
		<td>
		<input type="text" name="SuperficiedelTerreno4" id="SuperficiedelTerreno4" value="' . $arrayTabla4["Superficie_Terreno"] . '"/>M2
		</td>
	</tr>
	<tr>
		<td>
		Frente :
		</td>
		<td>
		<input type="text" name="Frente" id="Frente" value="' . $arrayTabla4["Frente"] . '" />ML
		</td>
	</tr>
	<tr>
		<td>
		Fondo :
		</td>
		<td>
		<input type="text" name="Fondo" id="Fondo" value="' . $arrayTabla4["Fondo"] . '"/>ML
		</td>
	</tr>';
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM .='';
        } else {
            $sHTM .='<tr>
		<td>
		Superficie construida :
		</td>
		<td>
		<input type="text" name="Superficieconstruida4" id="Superficieconstruida4" value="' . $arrayTabla4["Superficie_Construida"] . '"/>M2
		</td>
	</tr>';
        }
        $sHTM .='<tr>
		<td>
		Forma :
		</td>
		<td>
		<select name="Forma" id="Forma">';
        if ($arrayTabla4["Forma"] == "Regular") {
            $sHTM .='<option value="Regular" selected="selected">Regular</option>';
        } else {
            $sHTM .='<option value="Regular">Regular</option>';
        }
        if ($arrayTabla4["Forma"] == "Irregular") {
            $sHTM .='<option value="Irregular" selected="selected">Irregular</option>';
        } else {
            $sHTM .='<option value="Irregular">Irregular</option>';
        }

        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Topografía :
		</td>
		<td>
		<select name="Topografia" id="Topografia">';
        if ($arrayTabla4["Topografia"] == "Plana") {
            $sHTM .='<option value="Plana" selected="selected">Plana</option>';
        } else {
            $sHTM .='<option value="Plana">Plana</option>';
        }
        if ($arrayTabla4["Topografia"] == "Pendiente") {
            $sHTM .='<option value="Pendiente" selected="selected">Pendiente</option>';
        } else {
            $sHTM .='<option value="Pendiente">Pendiente</option>';
        }
        if ($arrayTabla4["Topografia"] == "PendientePronunciada") {
            $sHTM .='<option value="PendientePronunciada" selected="selected">Pendiente Pronunciada</option>';
        } else {
            $sHTM .='<option value="PendientePronunciada">Pendiente Pronunciada</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Resistencia del suelo :
		</td>
		<td>
		<input type="text" name="Resistenciadelsuelo" id="Resistenciadelsuelo" value="' . $arrayTabla4["Resistencia_Suelo"] . '" />
		</td>
	</tr>
	<tr>
		<td>
		Colindancias :
		</td>
		<td>
		<table>
		<tr>
		<td>
		Norte : <input type="text" name="Norte" id="Norte" value="' . $arrayTabla4["COLINDANCIA_NORTE"] . '" size="10" />
		</td>
		<td>
		Sur : <input type="text" name="Sur" id="Sur" value="' . $arrayTabla4["COLINDANCIA_SUR"] . '" size="10" />
		</td>
		<td>
		Este : <input type="text" name="Este" id="Este" value="' . $arrayTabla4["COLINDANCIA_ESTE"] . '" size="10" />
		</td>
		<td>
		Oeste : <input type="text" name="Oeste" id="Oeste" value="' . $arrayTabla4["COLINDANCIA_OESTE"] . '" size="10" />
		</td>
		</td>
		</tr>
		</table>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';
        return $sHTM;
    }

    function ServiciosBasicos($Tipo) {
        $objTabla5Controlador = new Tabla5__Controlador;
        $arrayTabla5 = $objTabla5Controlador->getArrayDatosTabla5($_GET['CodigoAvaluo']);
        $sHTM = '';

        $sHTM.='<article class="post">
<header>
<h3>5. Servicios Basicos</h3>
</header>
<p>
<table width="40%" class="Tabla1">
<tr>
<td>
Servicios
</td>
<td>
El inmueble
</td>
<td>
La Zona
</td>
</tr>
	<tr>
		<td>
		Agua potable :
		</td>
		<td>';
        if ($Tipo == "Terreno"||$Tipo == "Garaje") {
            $sHTM .='<select name="Aguapotable" id="Aguapotable">';
            if ($arrayTabla5["Agua_Zona"] == "Si") {
                $sHTM .='<option value="Si" selected="selected">Si</option>';
            } else {
                $sHTM .='<option value="Si">Si</option>';
            }

            if ($arrayTabla5["Agua_Zona"] == "No" or $arrayTabla5["Agua_Zona"] == "") {
                $sHTM .='<option value="No" selected="selected">No</option>';
            } else {
                $sHTM .='<option value="No">No</option>';
            }
            $sHTM .='</select>
		</td>
		<td>
		<select name="Aguapotable5" id="Aguapotable5">';
            if ($arrayTabla5["Agua_Inmueble"] == "0.25") {
                $sHTM .='<option value="0.25" selected="selected">Si</option>';
            } else {
                $sHTM .='<option value="0.25">Si</option>';
            }

            if ($arrayTabla5["Agua_Inmueble"] == "0" or $arrayTabla5["Agua_Inmueble"] == "") {
                $sHTM .='<option value="0" selected="selected">No</option>';
            } else {
                $sHTM .='<option value="0">No</option>';
            }
            $sHTM .='</select>';
        } else {

            $sHTM .='<select name="Aguapotable" id="Aguapotable">';
            if ($arrayTabla5["Agua_Zona"] == "Si") {
                $sHTM .='<option value="Si" selected="selected">Si</option>';
            } else {
                $sHTM .='<option value="Si">Si</option>';
            }

            if ($arrayTabla5["Agua_Zona"] == "No" or $arrayTabla5["Agua_Zona"] == "") {
                $sHTM .='<option value="No" selected="selected">No</option>';
            } else {
                $sHTM .='<option value="No">No</option>';
            }
            $sHTM .='</select>
		</td>
		<td>
		<select name="Aguapotable5" id="Aguapotable5">';
            if ($arrayTabla5["Agua_Inmueble"] == "0.25") {
                $sHTM .='<option value="0.25" selected="selected">Si</option>';
            } else {
                $sHTM .='<option value="0.25">Si</option>';
            }

            if ($arrayTabla5["Agua_Inmueble"] == "0" or $arrayTabla5["Agua_Inmueble"] == "") {
                $sHTM .='<option value="0" selected="selected">No</option>';
            } else {
                $sHTM .='<option value="0">No</option>';
            }
            $sHTM .='</select>';
        }
        $sHTM .='</td>
	</tr>
	<tr>
		<td>
		Energía Eléctrica :
		</td>
		<td>
		<select name="EnergiaElectrica" id="EnergiaElectrica">';
        if ($arrayTabla5["Energia_Zona"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Energia_Zona"] == "No" or $arrayTabla5["Energia_Zona"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="EnergiaElectrica5" id="EnergiaElectrica5">';
        if ($arrayTabla5["Energia_Inmueble"] == "0.2") {
            $sHTM .='<option value="0.25" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="0.25">Si</option>';
        }

        if ($arrayTabla5["Energia_Inmueble"] == "0" or $arrayTabla5["Energia_Inmueble"] == "") {
            $sHTM .='<option value="0" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="0">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Servicio Telefónico :
		</td>
		<td>
		<select name="ServicioTelefonico" id="ServicioTelefonico">';
        if ($arrayTabla5["Telefono_Zona"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Telefono_Zona"] == "No" or $arrayTabla5["Telefono_Zona"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="ServicioTelefonico5" id="ServicioTelefonico5">';
        if ($arrayTabla5["Telefono_Inmueble"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Telefono_Inmueble"] == "No" or $arrayTabla5["Telefono_Inmueble"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Alcantarillado Público :
		</td>
		<td>
		<select name="AlcantarilladoPublico" id="AlcantarilladoPublico">';
        if ($arrayTabla5["Alcantarillado_Zona"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Alcantarillado_Zona"] == "No" or $arrayTabla5["Alcantarillado_Zona"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="AlcantarilladoPublico5" id="AlcantarilladoPublico5">';
        if ($arrayTabla5["Alcantarillado_Inmueble"] == "0.25") {
            $sHTM .='<option value="0.25" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="0.25">Si</option>';
        }

        if ($arrayTabla5["Alcantarillado_Inmueble"] == "0" or $arrayTabla5["Alcantarillado_Inmueble"] == "") {
            $sHTM .='<option value="0" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="0">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Gas Domiciliario :
		</td>
		<td>
		<select name="GasDomiciliario" id="GasDomiciliario">';
        if ($arrayTabla5["Gas_Zona"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Gas_Zona"] == "No" or $arrayTabla5["Gas_Zona"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="GasDomiciliario5" id="GasDomiciliario5">';
        if ($arrayTabla5["Gas_Inmueble"] == "0.25") {
            $sHTM .='<option value="0.25" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="0.25">Si</option>';
        }

        if ($arrayTabla5["Gas_Inmueble"] == "0" or $arrayTabla5["Gas_Inmueble"] == "") {
            $sHTM .='<option value="0" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="0">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Internet :
		</td>
		<td>
		<select name="Internet" id="Internet">';
        if ($arrayTabla5["Internet"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Internet"] == "No" or $arrayTabla5["Internet"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="Internet5" id="Internet5">';
        if ($arrayTabla5["Internet_Inmueble"] == "0") {
            $sHTM .='<option value="0" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="0">Si</option>';
        }

        if ($arrayTabla5["Internet_Inmueble"] == "0" or $arrayTabla5["Internet_Inmueble"] == "") {
            $sHTM .='<option value="0" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="0">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	<tr>
	<tr>
		<td>
		Cable :
		</td>
		<td>
		<select name="Cable" id="Cable">';
        if ($arrayTabla5["Cable"] == "Si") {
            $sHTM .='<option value="Si" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="Si">Si</option>';
        }

        if ($arrayTabla5["Cable"] == "No" or $arrayTabla5["Cable"] == "") {
            $sHTM .='<option value="No" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="No">No</option>';
        }
        $sHTM .='</select>
		</td>
		<td>
		<select name="Cable5" id="Cable5">';
        if ($arrayTabla5["Cable_Inmueble"] == "0") {
            $sHTM .='<option value="0" selected="selected">Si</option>';
        } else {
            $sHTM .='<option value="0">Si</option>';
        }

        if ($arrayTabla5["Cable_Inmueble"] == "0" or $arrayTabla5["Cable_Inmueble"] == "") {
            $sHTM .='<option value="0" selected="selected">No</option>';
        } else {
            $sHTM .='<option value="0">No</option>';
        }
        $sHTM .='</select>
		</td>
	</tr>
	</table>
	<table width="70%" class="Tabla1">
	<tr>
	<td>
					<h5>Observaciones:</h5>
	</td>
		<td>
		<h5><textarea type="text" name="Observaciones6" id="Observaciones6" cols="29" rows="5">' . $arrayTabla5["Observaciones"] . '</textarea></h5>
		</td>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';

        return $sHTM;
    }

    function CaracteristicasDeLaEdificacion() {
        $objTabla6Controlador = new Tabla6__Controlador;
        $arrayTabla6 = $objTabla6Controlador->getArrayDatosTabla6($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>6. Caracteristicas de la edificación</h3>
</header>
<p>
<table width="100%" border="0" bordercolor="#3399FF" class="Tabla1">
<tr>
<td class="Tabla2">
Uso
</td>
</tr>
	<tr>
		<td align="right">
		Residencial: 
		</td>
		<td>';
        if ($arrayTabla6['Residencial'] == "Si" and $arrayTabla6['Residencial'] != "") {
            $sHTM.='<input type="checkbox" name="Residencial" id="Residencial" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Residencial" id="Residencial">';
        }
        $sHTM.='</td>
		<td align="right">
		Oficina:
		</td>
		<td>';
        if ($arrayTabla6['Oficina'] == "Si") {
            $sHTM.='<input type="checkbox" name="Oficina" id="Oficina" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Oficina" id="Oficina">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Comercial:
		</td>
		<td>';
        if ($arrayTabla6['Comercial'] == "Si") {
            $sHTM.='<input type="checkbox" name="Comercial" id="Comercial" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Comercial" id="Comercial">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Otros:
		</td>
		<td>
		<input type="text" name="Otros6" id="Otros6" value="' . $arrayTabla6["Otros_Uso"] . '" />
		</td>
	</tr>
    <tr>
<td class="Tabla2">
Ocupación:
</td>
</tr>
	<tr>
		<td align="right">
		Propietarios:
		</td>
		<td>';
        if ($arrayTabla6['Propietarios'] == "Si") {
            $sHTM.='<input type="checkbox" name="Propietarios" id="Propietarios" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Propietarios" id="Propietarios">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Inquilinos:
		</td>
		<td>';
        if ($arrayTabla6['Inquilinos'] == "Si") {
            $sHTM.='<input type="checkbox" name="Inquilinos" id="Inquilinos" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Inquilinos" id="Inquilinos">';
        }
        $sHTM.='
		</td>
		<td>
		</td>
		<td>
		</td>
		<td align="right">
		Otros:
		</td>
		<td>
		<input type="text" name="Otros62" id="Otros62" value="' . $arrayTabla6["Otros_Ocupacion"] . '" />
		</td>
	</tr>
	
	<tr>
<td class="Tabla2">
Tipo
</td>
</tr>
	<tr>
		<td align="right">
		Lujo :
		</td>
		<td>';
        if ($arrayTabla6['Lujo'] == "Si") {
            $sHTM.='<input type="checkbox" name="Lujo" id="Lujo" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Lujo" id="Lujo">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Semilujo :
		</td>
		<td>';
        if ($arrayTabla6['Semilujo'] == "Si") {
            $sHTM.='<input type="checkbox" name="Semilujo" id="Semilujo" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Semilujo" id="Semilujo">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Standart :
		</td>
		<td>';
        if ($arrayTabla6['Standart'] == "Si") {
            $sHTM.='<input type="checkbox" name="Standart" id="Standart" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Standart" id="Standart">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Económico :
		</td>
		<td>';
        if ($arrayTabla6['Economico'] == "Si") {
            $sHTM.='<input type="checkbox" name="Economico" id="Economico" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Economico" id="Economico">';
        }
        $sHTM.='
		</td>
	</tr>
	<tr>
<td class="Tabla2">
Estado :
</td>
</tr>
	<tr>
		<td align="right">
		Bueno :
		</td>
		<td>';
        if ($arrayTabla6['Bueno'] == "Si") {
            $sHTM.='<input type="checkbox" name="Bueno" id="Bueno" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Bueno" id="Bueno">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Regular :
		</td>
		<td>';
        if ($arrayTabla6['Regular'] == "Si") {
            $sHTM.='<input type="checkbox" name="Regular" id="Regular" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Regular" id="Regular">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Malo :
		</td>
		<td>';
        if ($arrayTabla6['Malo'] == "Si") {
            $sHTM.='<input type="checkbox" name="Malo" id="Malo" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="Malo" id="Malo">';
        }
        $sHTM.='
		</td>
		<td align="right">
		Muy Malo :
		</td>
		<td>';
        if ($arrayTabla6['Muy_Malo'] == "Si") {
            $sHTM.='<input type="checkbox" name="MuyMalo" id="MuyMalo" checked="checked">';
        } else {
            $sHTM.='<input type="checkbox" name="MuyMalo" id="MuyMalo">';
        }
        $sHTM.='
		</td>
	</tr>
	<tr>
<td class="Tabla2">
Antiguedad :
</td>
<td>
<input type="text" name="Antiguedad" id="Antiguedad" value="' . $arrayTabla6["Antiguedad"] . '" />
</td>
</tr>
<tr>
<td class="Tabla2">
Descripcion :
</td>
<td>
<textarea name="Descripcion7" id="Descripcion7" cols="29" rows="5">' . $arrayTabla6["Descripcion"] . '</textarea>
</td>
</tr>
<tr>
<td class="Tabla2">
Numero de ambientes:
</td>
<td>
<input type="text" name="Numerodeambientes" id="Numerodeambientes" value="' . $arrayTabla6["Numero_Ambientes"] . '"/>
</td>
</tr>
<tr>
<td class="Tabla2">
Numero de bloques :
</td>
<td>
		<select name="Numerodebloques" id="Numerodebloques">';
        if ($arrayTabla6['Numero_Bloques'] == 1) {
            $sHTM.='<option value="1" selected="selected">1</option>';
        } else {
            $sHTM.='<option value="1">1</option>';
        }
        if ($arrayTabla6['Numero_Bloques'] == 2) {
            $sHTM.='<option value="2" selected="selected">2</option>';
        } else {
            $sHTM.='<option value="2">2</option>';
        }
        if ($arrayTabla6['Numero_Bloques'] == 3) {
            $sHTM.='<option value="3" selected="selected">3</option>';
        } else {
            $sHTM.='<option value="3">3</option>';
        }
        if ($arrayTabla6['Numero_Bloques'] == 4) {
            $sHTM.='<option value="4" selected="selected">4</option>';
        } else {
            $sHTM.='<option value="4">4</option>';
        }
        $sHTM.='</select>
</td>
</tr>
</table>

</footer>
</article>';
        return $sHTM;
    }

    function CaracteristicasDatosTecnicosdelaCpnstruccion() {
        $objTabla62Controlador = new Tabla62__Controlador;
        $arrayTabla62 = $objTabla62Controlador->getArrayDatosTabla62($_GET['CodigoAvaluo']);
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>6. Caracteristicas de la edificación</h3>
</header>
<p>
<table width="100%" border="1" class="Tabla1">
<tr>';
        $sHTM.= '<td colspan="15"><p>Datos técnicos de la construcción</p></td>
  </tr>
  <tr><td width="161">OBRA GRUESA</td>
    <td width="18">B1</td>
    <td width="18">B2</td>
    <td width="18">B3</td>
    <td width="18">B4</td>
    <td width="229">ACABADOS REVESTIMIENTOS</td>
    <td width="21">B1</td>
    <td width="21">B2</td>
    <td width="21">B3</td>
    <td width="21">B4</td>
    <td width="85">FACHADA</td>';
        $sHTM.= '<td width="21">B1</td>
    <td width="21">B2</td>
    <td width="21">B3</td>
    <td width="22">B4</td>
  </tr>
  <tr>
    <td><h5>ESTRUCTURA</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td><h5>PISOS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MATERIALES ESPECIALES</td>';
        $sHTM.= '<td><input type="text" name="MATERIALES7_B1" id="MATERIALES7_B1" size="3" value="' . $arrayTabla62["MATERIALES7_B1"] . '"/></td>
    <td><input type="text" name="MATERIALES7_B2" id="MATERIALES7_B2" size="3" value="' . $arrayTabla62["MATERIALES7_B2"] . '"/></td>
    <td><input type="text" name="MATERIALES7_B3" id="MATERIALES7_B3" size="3" value="' . $arrayTabla62["MATERIALES7_B3"] . '"/></td>
    <td><input type="text" name="MATERIALES7_B4" id="MATERIALES7_B4" size="3" value="' . $arrayTabla62["MATERIALES7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>H° A° PILOTAJE</td>
    <td><label for="textfield"></label>
    <input type="text" name="PILOTAJE1_B1" id="PILOTAJE1_B1" size="3" value="' . $arrayTabla62["PILOTAJE1_B1"] . '"/></td>
    <td><input type="text" name="PILOTAJE1_B2" id="PILOTAJE1_B2" size="3" value="' . $arrayTabla62["PILOTAJE1_B2"] . '"/></td>
    <td><input type="text" name="PILOTAJE1_B3" id="PILOTAJE1_B3" size="3" value="' . $arrayTabla62["PILOTAJE1_B3"] . '"/></td>
    <td><input type="text" name="PILOTAJE1_B4" id="PILOTAJE1_B4" size="3" value="' . $arrayTabla62["PILOTAJE1_B4"] . '"/></td>
    <td>TIERRA</td>
    <td><input type="text" name="TIERRA4_B1" id="TIERRA4_B1" size="3" value="' . $arrayTabla62["TIERRA4_B1"] . '"/></td>
    <td><input type="text" name="TIERRA4_B2" id="TIERRA4_B2" size="3" value="' . $arrayTabla62["TIERRA4_B2"] . '"/></td>
    <td><input type="text" name="TIERRA4_B3" id="TIERRA4_B3" size="3" value="' . $arrayTabla62["TIERRA4_B3"] . '"/></td>
    <td><input type="text" name="TIERRA4_B4" id="TIERRA4_B4" size="3" value="' . $arrayTabla62["TIERRA4_B4"] . '"/></td>
    <td>MÁRMOL</td>
    <td><input type="text" name="MARMOL7_B1" id="MARMOL7_B1" size="3" value="' . $arrayTabla62["MARMOL7_B1"] . '"/></td>
    <td><input type="text" name="MARMOL7_B2" id="MARMOL7_B2" size="3" value="' . $arrayTabla62["MARMOL7_B2"] . '"/></td>
    <td><input type="text" name="MARMOL7_B3" id="MARMOL7_B3" size="3" value="' . $arrayTabla62["MARMOL7_B3"] . '"/></td>
    <td><input type="text" name="MARMOL7_B4" id="MARMOL7_B4" size="3" value="' . $arrayTabla62["MARMOL7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>H° A° RADIER</td>
    <td><input type="text" name="RADIER1_B1" id="RADIER1_B1" size="3" value="' . $arrayTabla62["RADIER1_B1"] . '"/></td>
    <td><input type="text" name="RADIER1_B2" id="RADIER1_B2" size="3" value="' . $arrayTabla62["RADIER1_B2"] . '"/></td>
    <td><input type="text" name="RADIER1_B3" id="RADIER1_B3" size="3" value="' . $arrayTabla62["RADIER1_B3"] . '"/></td>
    <td><input type="text" name="RADIER1_B4" id="RADIER1_B4" size="3" value="' . $arrayTabla62["RADIER1_B4"] . '"/></td>
    <td>CERÁMICA ESMALTADA</td>
    <td><input type="text" name="CERAMICA4_B1" id="CERAMICA4_B1" size="3" value="' . $arrayTabla62["CERAMICA4_B1"] . '"/></td>
    <td><input type="text" name="CERAMICA4_B2" id="CERAMICA4_B2" size="3" value="' . $arrayTabla62["CERAMICA4_B2"] . '"/></td>
    <td><input type="text" name="CERAMICA4_B3" id="CERAMICA4_B3" size="3" value="' . $arrayTabla62["CERAMICA4_B3"] . '"/></td>
    <td><input type="text" name="CERAMICA4_B4" id="CERAMICA4_B4" size="3" value="' . $arrayTabla62["CERAMICA4_B4"] . '"/></td>
    <td>CERÁMICA ESMALTADA</td>
    <td><input type="text" name="CERAMICA7_B1" id="CERAMICA7_B1" size="3" value="' . $arrayTabla62["CERAMICA7_B1"] . '"/></td>
    <td><input type="text" name="CERAMICA7_B2" id="CERAMICA7_B2" size="3" value="' . $arrayTabla62["CERAMICA7_B2"] . '"/></td>
    <td><input type="text" name="CERAMICA7_B3" id="CERAMICA7_B3" size="3" value="' . $arrayTabla62["CERAMICA7_B3"] . '"/></td>
    <td><input type="text" name="CERAMICA7_B4" id="CERAMICA7_B4" size="3" value="' . $arrayTabla62["CERAMICA7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td><input type="text" name="HORMIGON1_B1" id="HORMIGON1_B1" size="3" value="' . $arrayTabla62["HORMIGON1_B1"] . '"/></td>
    <td><input type="text" name="HORMIGON1_B2" id="HORMIGON1_B2" size="3" value="' . $arrayTabla62["HORMIGON1_B2"] . '"/></td>
    <td><input type="text" name="HORMIGON1_B3" id="HORMIGON1_B3" size="3" value="' . $arrayTabla62["HORMIGON1_B3"] . '"/></td>
    <td><input type="text" name="HORMIGON1_B4" id="HORMIGON1_B4" size="3" value="' . $arrayTabla62["HORMIGON1_B4"] . '"/></td>
    <td>CERÁMICA ROJA</td>
    <td><input type="text" name="CERAMICAROJA4_B1" id="CERAMICAROJA4_B1" size="3" value="' . $arrayTabla62["CERAMICAROJA4_B1"] . '"/></td>
    <td><input type="text" name="CERAMICAROJA4_B2" id="CERAMICAROJA4_B2" size="3" value="' . $arrayTabla62["CERAMICAROJA4_B2"] . '"/></td>
    <td><input type="text" name="CERAMICAROJA4_B3" id="CERAMICAROJA4_B3" size="3" value="' . $arrayTabla62["CERAMICAROJA4_B3"] . '"/></td>
    <td><input type="text" name="CERAMICAROJA4_B4" id="CERAMICAROJA4_B4" size="3" value="' . $arrayTabla62["CERAMICAROJA4_B4"] . '"/></td>
    <td>PLACAS DE PIEDRA</td>';
        $sHTM.= '<td><input type="text" name="PLACAS7_B1" id="PLACAS7_B1" size="3" value="' . $arrayTabla62["PLACAS7_B1"] . '"/></td>
    <td><input type="text" name="PLACAS7_B2" id="PLACAS7_B2" size="3" value="' . $arrayTabla62["PLACAS7_B2"] . '"/></td>
    <td><input type="text" name="PLACAS7_B3" id="PLACAS7_B3" size="3" value="' . $arrayTabla62["PLACAS7_B3"] . '"/></td>
    <td><input type="text" name="PLACAS7_B4" id="PLACAS7_B4" size="3" value="' . $arrayTabla62["PLACAS7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>METÁLICA</td>
    <td><input type="text" name="METALICA1_B1" id="METALICA1_B1" size="3" value="' . $arrayTabla62["METALICA1_B1"] . '"/></td>
    <td><input type="text" name="METALICA1_B2" id="METALICA1_B2" size="3" value="' . $arrayTabla62["METALICA1_B2"] . '"/></td>
    <td><input type="text" name="METALICA1_B3" id="METALICA1_B3" size="3" value="' . $arrayTabla62["METALICA1_B3"] . '"/></td>
    <td><input type="text" name="METALICA1_B4" id="METALICA1_B4" size="3" value="' . $arrayTabla62["METALICA1_B4"] . '"/></td>
    <td>ALFOMBRADO</td>
    <td><input type="text" name="ALFOMBRADO4_B1" id="ALFOMBRADO4_B1" size="3" value="' . $arrayTabla62["ALFOMBRADO4_B1"] . '"/></td>
    <td><input type="text" name="ALFOMBRADO4_B2" id="ALFOMBRADO4_B2" size="3" value="' . $arrayTabla62["ALFOMBRADO4_B2"] . '"/></td>
    <td><input type="text" name="ALFOMBRADO4_B3" id="ALFOMBRADO4_B3" size="3" value="' . $arrayTabla62["ALFOMBRADO4_B3"] . '"/></td>
    <td><input type="text" name="ALFOMBRADO4_B4" id="ALFOMBRADO4_B4" size="3" value="' . $arrayTabla62["ALFOMBRADO4_B4"] . '"/></td>
    <td>CEMENTO + CAL +ARENA</td>
    <td><input type="text" name="CEMENTO7_B1" id="CEMENTO7_B1" size="3" value="' . $arrayTabla62["CEMENTO7_B1"] . '"/></td>
    <td><input type="text" name="CEMENTO7_B2" id="CEMENTO7_B2" size="3" value="' . $arrayTabla62["CEMENTO7_B2"] . '"/></td>
    <td><input type="text" name="CEMENTO7_B3" id="CEMENTO7_B3" size="3" value="' . $arrayTabla62["CEMENTO7_B3"] . '"/></td>
    <td><input type="text" name="CEMENTO7_B4" id="CEMENTO7_B4" size="3" value="' . $arrayTabla62["CEMENTO7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>PIEDRA</td>
    <td><input type="text" name="PIEDRA1_B1" id="PIEDRA1_B1" size="3" value="' . $arrayTabla62["PIEDRA1_B1"] . '"/></td>
    <td><input type="text" name="PIEDRA1_B2" id="PIEDRA1_B2" size="3" value="' . $arrayTabla62["PIEDRA1_B2"] . '"/></td>
    <td><input type="text" name="PIEDRA1_B3" id="PIEDRA1_B3" size="3" value="' . $arrayTabla62["PIEDRA1_B3"] . '"/></td>
    <td><input type="text" name="PIEDRA1_B4" id="PIEDRA1_B4" size="3" value="' . $arrayTabla62["PIEDRA1_B4"] . '"/></td>
    <td>ENTABLONADO</td>';
        $sHTM.= '<td><input type="text" name="ENTABLONADO4_B1" id="ENTABLONADO4_B1" size="3" value="' . $arrayTabla62["ENTABLONADO4_B1"] . '"/></td>
    <td><input type="text" name="ENTABLONADO4_B2" id="ENTABLONADO4_B2" size="3" value="' . $arrayTabla62["ENTABLONADO4_B2"] . '"/></td>
    <td><input type="text" name="ENTABLONADO4_B3" id="ENTABLONADO4_B3" size="3" value="' . $arrayTabla62["ENTABLONADO4_B3"] . '"/></td>
    <td><input type="text" name="ENTABLONADO4_B4" id="ENTABLONADO4_B4" size="3" value="' . $arrayTabla62["ENTABLONADO4_B4"] . '"/></td>
    <td>PIEDRA O LADRILLO VISTO</td>
    <td><input type="text" name="PIEDRA7_B1" id="PIEDRA7_B1" size="3" value="' . $arrayTabla62["PIEDRA7_B1"] . '"/></td>
    <td><input type="text" name="PIEDRA7_B2" id="PIEDRA7_B2" size="3" value="' . $arrayTabla62["PIEDRA7_B2"] . '"/></td>
    <td><input type="text" name="PIEDRA7_B3" id="PIEDRA7_B3" size="3" value="' . $arrayTabla62["PIEDRA7_B3"] . '"/></td>
    <td><input type="text" name="PIEDRA7_B4" id="PIEDRA7_B4" size="3" value="' . $arrayTabla62["PIEDRA7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>LADRILLO PORTANTE</td>
    <td><input type="text" name="LADRILLO1_B1" id="LADRILLO1_B1" size="3" value="' . $arrayTabla62["LADRILLO1_B1"] . '"/></td>
    <td><input type="text" name="LADRILLO1_B2" id="LADRILLO1_B2" size="3" value="' . $arrayTabla62["LADRILLO1_B2"] . '"/></td>
    <td><input type="text" name="LADRILLO1_B3" id="LADRILLO1_B3" size="3" value="' . $arrayTabla62["LADRILLO1_B3"] . '"/></td>
    <td><input type="text" name="LADRILLO1_B4" id="LADRILLO1_B4" size="3" value="' . $arrayTabla62["LADRILLO1_B4"] . '"/></td>
    <td>PARQUET</td>
    <td><input type="text" name="PARQUET4_B1" id="PARQUET4_B1" size="3" value="' . $arrayTabla62["PARQUET4_B1"] . '"/></td>
    <td><input type="text" name="PARQUET4_B2" id="PARQUET4_B2" size="3" value="' . $arrayTabla62["PARQUET4_B2"] . '"/></td>
    <td><input type="text" name="PARQUET4_B3" id="PARQUET4_B3" size="3" value="' . $arrayTabla62["PARQUET4_B3"] . '"/></td>
    <td><input type="text" name="PARQUET4_B4" id="PARQUET4_B4" size="3" value="' . $arrayTabla62["PARQUET4_B4"] . '"/></td>
    <td>CAL</td>
    <td><input type="text" name="CAL7_B1" id="CAL7_B1" size="3" value="' . $arrayTabla62["CAL7_B1"] . '"/></td>
    <td><input type="text" name="CAL7_B2" id="CAL7_B2" size="3" value="' . $arrayTabla62["CAL7_B2"] . '"/></td>
    <td><input type="text" name="CAL7_B3" id="CAL7_B3" size="3" value="' . $arrayTabla62["CAL7_B3"] . '"/></td>
    <td><input type="text" name="CAL7_B4" id="CAL7_B4" size="3" value="' . $arrayTabla62["CAL7_B4"] . '"/></td>
  </tr>
  <tr>
    <td>ADOBE PROTANTE</td>
    <td><input type="text" name="ADOBE1_B1" id="ADOBE1_B1" size="3" value="' . $arrayTabla62["ADOBE1_B1"] . '"/></td>
    <td><input type="text" name="ADOBE1_B2" id="ADOBE1_B2" size="3" value="' . $arrayTabla62["ADOBE1_B2"] . '"/></td>
    <td><input type="text" name="ADOBE1_B3" id="ADOBE1_B3" size="3" value="' . $arrayTabla62["ADOBE1_B3"] . '"/></td>
    <td><input type="text" name="ADOBE1_B4" id="ADOBE1_B4" size="3" value="' . $arrayTabla62["ADOBE1_B4"] . '"/></td>
    <td>MACHIMBRADO</td>
    <td><input type="text" name="MACHIMBRADO4_B1" id="MACHIMBRADO4_B1" size="3" value="' . $arrayTabla62["MACHIMBRADO4_B1"] . '"/></td>
    <td><input type="text" name="MACHIMBRADO4_B2" id="MACHIMBRADO4_B2" size="3" value="' . $arrayTabla62["MACHIMBRADO4_B2"] . '"/></td>
    <td><input type="text" name="MACHIMBRADO4_B3" id="MACHIMBRADO4_B3" size="3" value="' . $arrayTabla62["MACHIMBRADO4_B3"] . '"/></td>
    <td><input type="text" name="MACHIMBRADO4_B4" id="MACHIMBRADO4_B4" size="3" value="' . $arrayTabla62["MACHIMBRADO4_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CEMENTO</td>
    <td><input type="text" name="CEMENTO4_B1" id="CEMENTO4_B1" size="3" value="' . $arrayTabla62["CEMENTO4_B1"] . '"/></td>
    <td><input type="text" name="CEMENTO4_B2" id="CEMENTO4_B2" size="3" value="' . $arrayTabla62["CEMENTO4_B2"] . '"/></td>
    <td><input type="text" name="CEMENTO4_B3" id="CEMENTO4_B3" size="3" value="' . $arrayTabla62["CEMENTO4_B3"] . '"/></td>
    <td><input type="text" name="CEMENTO4_B4" id="CEMENTO4_B4" size="3" value="' . $arrayTabla62["CEMENTO4_B4"] . '"/></td>
    <td><h5>PUERTA</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
  </tr>
  <tr>
    <td><h5>MUROS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MOSAICO</td>
    <td><input type="text" name="MOSAICO4_B1" id="MOSAICO4_B1" size="3" value="' . $arrayTabla62["MOSAICO4_B1"] . '"/></td>
    <td><input type="text" name="MOSAICO4_B2" id="MOSAICO4_B2" size="3" value="' . $arrayTabla62["MOSAICO4_B2"] . '"/></td>
    <td><input type="text" name="MOSAICO4_B3" id="MOSAICO4_B3" size="3" value="' . $arrayTabla62["MOSAICO4_B3"] . '"/></td>
    <td><input type="text" name="MOSAICO4_B4" id="MOSAICO4_B4" size="3" value="' . $arrayTabla62["MOSAICO4_B4"] . '"/></td>
    <td>MADERA 1° CLASE</td>
    <td><input type="text" name="MADERA8_B1" id="MADERA8_B1" size="3" value="' . $arrayTabla62["MADERA8_B1"] . '"/></td>
    <td><input type="text" name="MADERA8_B2" id="MADERA8_B2" size="3" value="' . $arrayTabla62["MADERA8_B2"] . '"/></td>
    <td><input type="text" name="MADERA8_B3" id="MADERA8_B3" size="3" value="' . $arrayTabla62["MADERA8_B3"] . '"/></td>
    <td><input type="text" name="MADERA8_B4" id="MADERA8_B4" size="3" value="' . $arrayTabla62["MADERA8_B4"] . '"/></td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td><input type="text" name="HORMIGON2_B1" id="HORMIGON2_B1" size="3" value="' . $arrayTabla62["HORMIGON2_B1"] . '"/></td>
    <td><input type="text" name="HORMIGON2_B2" id="HORMIGON2_B2" size="3" value="' . $arrayTabla62["HORMIGON2_B2"] . '"/></td>
    <td><input type="text" name="HORMIGON2_B3" id="HORMIGON2_B3" size="3" value="' . $arrayTabla62["HORMIGON2_B3"] . '"/></td>
    <td><input type="text" name="HORMIGON2_B4" id="HORMIGON2_B4" size="3" value="' . $arrayTabla62["HORMIGON2_B4"] . '"/></td>
    <td>LOSA</td>
    <td><input type="text" name="LOSA4_B1" id="LOSA4_B1" size="3" value="' . $arrayTabla62["LOSA4_B1"] . '"/></td>
    <td><input type="text" name="LOSA4_B2" id="LOSA4_B2" size="3" value="' . $arrayTabla62["LOSA4_B2"] . '"/></td>
    <td><input type="text" name="LOSA4_B3" id="LOSA4_B3" size="3" value="' . $arrayTabla62["LOSA4_B3"] . '"/></td>
    <td><input type="text" name="LOSA4_B4" id="LOSA4_B4" size="3" value="' . $arrayTabla62["LOSA4_B4"] . '"/></td>
    <td>ALUMINIOS</td>';
        $sHTM.= '<td><input type="text" name="ALUMINIOS8_B1" id="ALUMINIOS8_B1" size="3" value="' . $arrayTabla62["ALUMINIOS8_B1"] . '"/></td>
    <td><input type="text" name="ALUMINIOS8_B2" id="ALUMINIOS8_B2" size="3" value="' . $arrayTabla62["ALUMINIOS8_B2"] . '"//></td>
    <td><input type="text" name="ALUMINIOS8_B3" id="ALUMINIOS8_B3" size="3" value="' . $arrayTabla62["ALUMINIOS8_B3"] . '"//></td>
    <td><input type="text" name="ALUMINIOS8_B4" id="ALUMINIOS8_B4" size="3" value="' . $arrayTabla62["ALUMINIOS8_B4"] . '"//></td>
  </tr>
  <tr>
    <td>PIEDRA</td>
    <td><input type="text" name="PIEDRA2_B1" id="PIEDRA2_B1" size="3" value="' . $arrayTabla62["PIEDRA2_B1"] . '"/></td>
    <td><input type="text" name="PIEDRA2_B2" id="PIEDRA2_B2" size="3" value="' . $arrayTabla62["PIEDRA2_B2"] . '"/></td>
    <td><input type="text" name="PIEDRA2_B3" id="PIEDRA2_B3" size="3" value="' . $arrayTabla62["PIEDRA2_B3"] . '"/></td>
    <td><input type="text" name="PIEDRA2_B4" id="PIEDRA2_B4" size="3" value="' . $arrayTabla62["PIEDRA2_B4"] . '"/></td>
    <td><h5>CIELOS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MADERA 2° CLASE</td>
    <td><input type="text" name="MADERASEGUNDA8_B1" id="MADERASEGUNDA8_B1" size="3" value="' . $arrayTabla62["MADERASEGUNDA8_B1"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA8_B2" id="MADERASEGUNDA8_B2" size="3" value="' . $arrayTabla62["MADERASEGUNDA8_B2"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA8_B3" id="MADERASEGUNDA8_B3" size="3" value="' . $arrayTabla62["MADERASEGUNDA8_B3"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA8_B4" id="MADERASEGUNDA8_B4" size="3" value="' . $arrayTabla62["MADERASEGUNDA8_B4"] . '"/></td>
  </tr>
  <tr>
    <td>LADRILLO GAMBOTE</td>
    <td><input type="text" name="LADRILLO2_B1" id="LADRILLO2_B1" size="3" value="' . $arrayTabla62["LADRILLO2_B1"] . '"/></td>
    <td><input type="text" name="LADRILLO2_B2" id="LADRILLO2_B2" size="3" value="' . $arrayTabla62["LADRILLO2_B2"] . '"/></td>
    <td><input type="text" name="LADRILLO2_B3" id="LADRILLO2_B3" size="3" value="' . $arrayTabla62["LADRILLO2_B3"] . '"/></td>
    <td><input type="text" name="LADRILLO2_B4" id="LADRILLO2_B4" size="3" value="' . $arrayTabla62["LADRILLO2_B4"] . '"/></td>
    <td>MATERIALES ESPECIALES</td>
    <td><input type="text" name="MATERIALES5_B1" id="MATERIALES5_B1" size="3" value="' . $arrayTabla62["MATERIALES5_B1"] . '"/></td>
    <td><input type="text" name="MATERIALES5_B2" id="MATERIALES5_B2" size="3" value="' . $arrayTabla62["MATERIALES5_B2"] . '"/></td>
    <td><input type="text" name="MATERIALES5_B3" id="MATERIALES5_B3" size="3" value="' . $arrayTabla62["MATERIALES5_B3"] . '"/></td>
    <td><input type="text" name="MATERIALES5_B4" id="MATERIALES5_B4" size="3" value="' . $arrayTabla62["MATERIALES5_B4"] . '"/></td>
    <td>METÁLICA</td>
    <td><input type="text" name="METALICA8_B1" id="METALICA8_B1" size="3" value="' . $arrayTabla62["METALICA8_B1"] . '"/></td>
    <td><input type="text" name="METALICA8_B2" id="METALICA8_B2" size="3" value="' . $arrayTabla62["METALICA8_B2"] . '"/></td>
    <td><input type="text" name="METALICA8_B3" id="METALICA8_B3" size="3" value="' . $arrayTabla62["METALICA8_B3"] . '"/></td>
    <td><input type="text" name="METALICA8_B4" id="METALICA8_B4" size="3" value="' . $arrayTabla62["METALICA8_B4"] . '"/></td>
  </tr>
  <tr>
    <td>BLOQUE DE CEMENTO</td>
    <td><input type="text" name="BLOQUE2_B1" id="BLOQUE2_B1" size="3" value="' . $arrayTabla62["BLOQUE2_B1"] . '"/></td>
    <td><input type="text" name="BLOQUE2_B2" id="BLOQUE2_B2" size="3" value="' . $arrayTabla62["BLOQUE2_B2"] . '"/></td>
    <td><input type="text" name="BLOQUE2_B3" id="BLOQUE2_B3" size="3" value="' . $arrayTabla62["BLOQUE2_B3"] . '"/></td>
    <td><input type="text" name="BLOQUE2_B4" id="BLOQUE2_B4" size="3" value="' . $arrayTabla62["BLOQUE2_B4"] . '"/></td>
    <td>MADERA</td>
    <td><input type="text" name="MADERA5_B1" id="MADERA5_B1" size="3" value="' . $arrayTabla62["MADERA5_B1"] . '"/></td>
    <td><input type="text" name="MADERA5_B2" id="MADERA5_B2" size="3" value="' . $arrayTabla62["MADERA5_B2"] . '"/></td>
    <td><input type="text" name="MADERA5_B3" id="MADERA5_B3" size="3" value="' . $arrayTabla62["MADERA5_B3"] . '"/></td>
    <td><input type="text" name="MADERA5_B4" id="MADERA5_B4" size="3" value="' . $arrayTabla62["MADERA5_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>LADRILLO HUECO</td>
    <td><input type="text" name="LADRILLOHUECO2_B1" id="LADRILLOHUECO2_B1" size="3" value="' . $arrayTabla62["LADRILLOHUECO2_B1"] . '"/></td>
    <td><input type="text" name="LADRILLOHUECO2_B2" id="LADRILLOHUECO2_B2" size="3" value="' . $arrayTabla62["LADRILLOHUECO2_B2"] . '"/></td>
    <td><input type="text" name="LADRILLOHUECO2_B3" id="LADRILLOHUECO2_B3" size="3" value="' . $arrayTabla62["LADRILLOHUECO2_B3"] . '"/></td>
    <td><input type="text" name="LADRILLOHUECO2_B4" id="LADRILLOHUECO2_B4" size="3" value="' . $arrayTabla62["LADRILLOHUECO2_B4"] . '"/></td>
    <td>YESO</td>
    <td><input type="text" name="YESO5_B1" id="YESO5_B1" size="3" value="' . $arrayTabla62["YESO5_B1"] . '"/></td>
    <td><input type="text" name="YESO5_B2" id="YESO5_B2" size="3" value="' . $arrayTabla62["YESO5_B2"] . '"/></td>
    <td><input type="text" name="YESO5_B3" id="YESO5_B3" size="3" value="' . $arrayTabla62["YESO5_B3"] . '"/></td>
    <td><input type="text" name="YESO5_B4" id="YESO5_B4" size="3" value="' . $arrayTabla62["YESO5_B4"] . '"/></td>
    <td><h5>VENTANAS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
  </tr>
  <tr>
    <td>ADOBE</td>
    <td><input type="text" name="ADOBE2_B1" id="ADOBE2_B1" size="3" value="' . $arrayTabla62["ADOBE2_B1"] . '"/></td>
    <td><input type="text" name="ADOBE2_B2" id="ADOBE2_B2" size="3" value="' . $arrayTabla62["ADOBE2_B2"] . '"/></td>
    <td><input type="text" name="ADOBE2_B3" id="ADOBE2_B3" size="3" value="' . $arrayTabla62["ADOBE2_B3"] . '"/></td>
    <td><input type="text" name="ADOBE2_B4" id="ADOBE2_B4" size="3" value="' . $arrayTabla62["ADOBE2_B4"] . '"/></td>
    <td>COTENCIO</td>
    <td><input type="text" name="COTENCIO5_B1" id="COTENCIO5_B1" size="3" value="' . $arrayTabla62["COTENCIO5_B1"] . '"/></td>
    <td><input type="text" name="COTENCIO5_B2" id="COTENCIO5_B2" size="3" value="' . $arrayTabla62["COTENCIO5_B2"] . '"/></td>
    <td><input type="text" name="COTENCIO5_B3" id="COTENCIO5_B3" size="3" value="' . $arrayTabla62["COTENCIO5_B3"] . '"/></td>
    <td><input type="text" name="COTENCIO5_B4" id="COTENCIO5_B4" size="3" value="' . $arrayTabla62["COTENCIO5_B4"] . '"/></td>
    <td>MADERA 1° CLASE</td>
    <td><input type="text" name="MADERA9_B1" id="MADERA9_B1" size="3" value="' . $arrayTabla62["MADERA9_B1"] . '"/></td>
    <td><input type="text" name="MADERA9_B2" id="MADERA9_B2" size="3" value="' . $arrayTabla62["MADERA9_B2"] . '"/></td>
    <td><input type="text" name="MADERA9_B3" id="MADERA9_B3" size="3" value="' . $arrayTabla62["MADERA9_B3"] . '"/></td>
    <td><input type="text" name="MADERA9_B3" id="MADERA9_B4" size="3" value="' . $arrayTabla62["MADERA9_B4"] . '"/></td>
  </tr>
  <tr>
    <td>MADERA</td>
    <td><input type="text" name="MADERA2_B1" id="MADERA2_B1" size="3" value="' . $arrayTabla62["MADERA2_B1"] . '"/></td>
    <td><input type="text" name="MADERA2_B2" id="MADERA2_B2" size="3" value="' . $arrayTabla62["MADERA2_B2"] . '"/></td>
    <td><input type="text" name="MADERA2_B3" id="MADERA2_B3" size="3" value="' . $arrayTabla62["MADERA2_B3"] . '"/></td>
    <td><input type="text" name="MADERA2_B4" id="MADERA2_B4" size="3" value="' . $arrayTabla62["MADERA2_B4"] . '"/></td>
    <td><h5>MUROS INTERIORES</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>ALUMINIOS</td>
    <td><input type="text" name="ALUMINIOS9_B1" id="ALUMINIOS9_B1" size="3" value="' . $arrayTabla62["ALUMINIOS9_B1"] . '"/></td>
    <td><input type="text" name="ALUMINIOS9_B2" id="ALUMINIOS9_B2" size="3" value="' . $arrayTabla62["ALUMINIOS9_B2"] . '"/></td>
    <td><input type="text" name="ALUMINIOS9_B3" id="ALUMINIOS9_B3" size="3" value="' . $arrayTabla62["ALUMINIOS9_B3"] . '"/></td>
    <td><input type="text" name="ALUMINIOS9_B4" id="ALUMINIOS9_B4" size="3" value="' . $arrayTabla62["ALUMINIOS9_B4"] . '"/></td>
  </tr>
  <tr>
    <td><h5>CUBIERTAS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MTERIALES ESPECIALES</td>
    <td><input type="text" name="MATERIALES6_B1" id="MATERIALES6_B1" size="3" value="' . $arrayTabla62["MATERIALES6_B1"] . '"/></td>
    <td><input type="text" name="MATERIALES6_B2" id="MATERIALES6_B2" size="3" value="' . $arrayTabla62["MATERIALES6_B2"] . '"/></td>
    <td><input type="text" name="MATERIALES6_B3" id="MATERIALES6_B3" size="3" value="' . $arrayTabla62["MATERIALES6_B3"] . '"/></td>
    <td><input type="text" name="MATERIALES6_B4" id="MATERIALES6_B4" size="3" value="' . $arrayTabla62["MATERIALES6_B4"] . '"/></td>
    <td>MADERA 2° CLASE</td>
    <td><input type="text" name="MADERASEGUNDA9_B1" id="MADERASEGUNDA9_B1" size="3" value="' . $arrayTabla62["MADERASEGUNDA9_B1"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA9_B2" id="MADERASEGUNDA9_B2" size="3" value="' . $arrayTabla62["MADERASEGUNDA9_B2"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA9_B3" id="MADERASEGUNDA9_B3" size="3" value="' . $arrayTabla62["MADERASEGUNDA9_B3"] . '"/></td>
    <td><input type="text" name="MADERASEGUNDA9_B4" id="MADERASEGUNDA9_B4" size="3" value="' . $arrayTabla62["MADERASEGUNDA9_B4"] . '"/></td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td><input type="text" name="HORMIGON3_B1" id="HORMIGON3_B1" size="3" value="' . $arrayTabla62["HORMIGON3_B1"] . '"/></td>
    <td><input type="text" name="HORMIGON3_B2" id="HORMIGON3_B2" size="3" value="' . $arrayTabla62["HORMIGON3_B2"] . '"/></td>
    <td><input type="text" name="HORMIGON3_B3" id="HORMIGON3_B3" size="3" value="' . $arrayTabla62["HORMIGON3_B3"] . '"/></td>
    <td><input type="text" name="HORMIGON3_B4" id="HORMIGON3_B4" size="3" value="' . $arrayTabla62["HORMIGON3_B4"] . '"/></td>
    <td>MARMOS</td>
    <td><input type="text" name="MARMOS6_B1" id="MARMOS6_B1" size="3" value="' . $arrayTabla62["MARMOS6_B1"] . '"/></td>
    <td><input type="text" name="MARMOS6_B2" id="MARMOS6_B2" size="3" value="' . $arrayTabla62["MARMOS6_B2"] . '"/></td>
    <td><input type="text" name="MARMOS6_B3" id="MARMOS6_B3" size="3" value="' . $arrayTabla62["MARMOS6_B3"] . '"/></td>
    <td><input type="text" name="MARMOS6_B4" id="MARMOS6_B4" size="3" value="' . $arrayTabla62["MARMOS6_B4"] . '"/></td>
    <td>METÁLICAS</td>
    <td><input type="text" name="METALICAS9_B1" id="METALICAS9_B1" size="3" value="' . $arrayTabla62["METALICAS9_B1"] . '"/></td>
    <td><input type="text" name="METALICAS9_B2" id="METALICAS9_B2" size="3" value="' . $arrayTabla62["METALICAS9_B2"] . '"/></td>
    <td><input type="text" name="METALICAS9_B3" id="METALICAS9_B3" size="3" value="' . $arrayTabla62["METALICAS9_B3"] . '"/></td>
    <td><input type="text" name="METALICAS9_B4" id="METALICAS9_B4" size="3" value="' . $arrayTabla62["METALICAS9_B4"] . '"/></td>
  </tr>
  <tr>
    <td>TEJA</td>
    <td><input type="text" name="TEJA3_B1" id="TEJA3_B1" size="3" value="' . $arrayTabla62["TEJA3_B1"] . '"/></td>
    <td><input type="text" name="TEJA3_B2" id="TEJA3_B2" size="3" value="' . $arrayTabla62["TEJA3_B2"] . '"/></td>
    <td><input type="text" name="TEJA3_B3" id="TEJA3_B3" size="3" value="' . $arrayTabla62["TEJA3_B3"] . '"/></td>
    <td><input type="text" name="TEJA3_B4" id="TEJA3_B4" size="3" value="' . $arrayTabla62["TEJA3_B4"] . '"/></td>
    <td>CERÁMICA ESMALTADA</td>
    <td><input type="text" name="CERAMICA6_B1" id="CERAMICA6_B1" size="3" value="' . $arrayTabla62["CERAMICA6_B1"] . '"/></td>
    <td><input type="text" name="CERAMICA6_B2" id="CERAMICA6_B2" size="3" value="' . $arrayTabla62["CERAMICA6_B2"] . '"/></td>
    <td><input type="text" name="CERAMICA6_B3" id="CERAMICA6_B3" size="3" value="' . $arrayTabla62["CERAMICA6_B3"] . '"/></td>
    <td><input type="text" name="CERAMICA6_B4" id="CERAMICA6_B4" size="3" value="' . $arrayTabla62["CERAMICA6_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TEJA ASFÁLTICA</td>
    <td><input type="text" name="TEJAASFALTICA3_B1" id="TEJAASFALTICA3_B1" size="3" value="' . $arrayTabla62["TEJAASFALTICA3_B1"] . '"/></td>
    <td><input type="text" name="TEJAASFALTICA3_B2" id="TEJAASFALTICA3_B2" size="3" value="' . $arrayTabla62["TEJAASFALTICA3_B2"] . '"/></td>
    <td><input type="text" name="TEJAASFALTICA3_B3" id="TEJAASFALTICA3_B3" size="3" value="' . $arrayTabla62["TEJAASFALTICA3_B3"] . '"/></td>
    <td><input type="text" name="TEJAASFALTICA3_B4" id="TEJAASFALTICA3_B4" size="3" value="' . $arrayTabla62["TEJAASFALTICA3_B4"] . '"/></td>
    <td>MOSAICO</td>
    <td><input type="text" name="MOSAICO6_B1" id="MOSAICO6_B1" size="3" value="' . $arrayTabla62["MOSAICO6_B1"] . '"/></td>
    <td><input type="text" name="MOSAICO6_B2" id="MOSAICO6_B2" size="3" value="' . $arrayTabla62["MOSAICO6_B2"] . '"/></td>
    <td><input type="text" name="MOSAICO6_B3" id="MOSAICO6_B3" size="3" value="' . $arrayTabla62["MOSAICO6_B3"] . '"/></td>
    <td><input type="text" name="MOSAICO6_B4" id="MOSAICO6_B4" size="3" value="' . $arrayTabla62["MOSAICO6_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PLACA SHINGLE</td>
    <td><input type="text" name="PLACA3_B1" id="PLACA3_B1" size="3" value="' . $arrayTabla62["PLACA3_B1"] . '"/></td>
    <td><input type="text" name="PLACA3_B2" id="PLACA3_B2" size="3" value="' . $arrayTabla62["PLACA3_B2"] . '"/></td>
    <td><input type="text" name="PLACA3_B3" id="PLACA3_B3" size="3" value="' . $arrayTabla62["PLACA3_B3"] . '"/></td>
    <td><input type="text" name="PLACA3_B4" id="PLACA3_B4" size="3" value="' . $arrayTabla62["PLACA3_B4"] . '"/></td>
    <td>MADERA</td>
    <td><input type="text" name="MADERA6_B1" id="MADERA6_B1" size="3" value="' . $arrayTabla62["MADERA6_B1"] . '"/></td>
    <td><input type="text" name="MADERA6_B2" id="MADERA6_B2" size="3" value="' . $arrayTabla62["MADERA6_B2"] . '"/></td>
    <td><input type="text" name="MADERA6_B3" id="MADERA6_B3" size="3" value="' . $arrayTabla62["MADERA6_B3"] . '"/></td>
    <td><input type="text" name="MADERA6_B4" id="MADERA6_B4" size="3" value="' . $arrayTabla62["MADERA6_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>CALAMINAS ZINC</td>
    <td><input type="text" name="CALAMINA3_B1" id="CALAMINA3_B1" size="3" value="' . $arrayTabla62["CALAMINA3_B1"] . '"/></td>
    <td><input type="text" name="CALAMINA3_B2" id="CALAMINA3_B2" size="3" value="' . $arrayTabla62["CALAMINA3_B2"] . '"/></td>
    <td><input type="text" name="CALAMINA3_B3" id="CALAMINA3_B3" size="3" value="' . $arrayTabla62["CALAMINA3_B3"] . '"/></td>
    <td><input type="text" name="CALAMINA3_B4" id="CALAMINA3_B4" size="3" value="' . $arrayTabla62["CALAMINA3_B4"] . '"/></td>
    <td>YESO CON PINTURA</td>
    <td><input type="text" name="YESO6_B1" id="YESO6_B1" size="3" value="' . $arrayTabla62["YESO6_B1"] . '"/></td>
    <td><input type="text" name="YESO6_B2" id="YESO6_B2" size="3" value="' . $arrayTabla62["YESO6_B2"] . '"/></td>
    <td><input type="text" name="YESO6_B3" id="YESO6_B3" size="3" value="' . $arrayTabla62["YESO6_B3"] . '"/></td>
    <td><input type="text" name="YESO6_B4" id="YESO6_B4" size="3" value="' . $arrayTabla62["YESO6_B4"] . '"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>CALAMINA PLÁSTICA</td>
    <td><input type="text" name="CALAMINAPLASTICA3_B1" id="CALAMINAPLASTICA3_B1" size="3" value="' . $arrayTabla62["CALAMINAPLASTICA3_B1"] . '"/></td>
    <td><input type="text" name="CALAMINAPLASTICA3_B2" id="CALAMINAPLASTICA3_B2" size="3" value="' . $arrayTabla62["CALAMINAPLASTICA3_B2"] . '"/></td>
    <td><input type="text" name="CALAMINAPLASTICA3_B3" id="CALAMINAPLASTICA3_B3" size="3" value="' . $arrayTabla62["CALAMINAPLASTICA3_B3"] . '"/></td>
    <td><input type="text" name="CALAMINAPLASTICA3_B4" id="CALAMINAPLASTICA3_B4" size="3" value="' . $arrayTabla62["CALAMINAPLASTICA3_B4"] . '"/></td>
    <td>CEMENTO CON OCRE</td>
    <td><input type="text" name="CEMENTO6_B1" id="CEMENTO6_B1" size="3" value="' . $arrayTabla62["CEMENTO6_B1"] . '"/></td>
    <td><input type="text" name="CEMENTO6_B2" id="CEMENTO6_B2" size="3" value="' . $arrayTabla62["CEMENTO6_B2"] . '"//></td>
    <td><input type="text" name="CEMENTO6_B3" id="CEMENTO6_B3" size="3" value="' . $arrayTabla62["CEMENTO6_B3"] . '"//></td>
    <td><input type="text" name="CEMENTO6_B4" id="CEMENTO6_B4" size="3" value="' . $arrayTabla62["CEMENTO6_B4"] . '"//></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>LOSA</td>
    <td><input type="text" name="LOSA5_B1" id="LOSA5_B1" size="3" value="' . $arrayTabla62["LOSA5_B1"] . '"/></td>
    <td><input type="text" name="LOSA5_B2" id="LOSA5_B2" size="3" value="' . $arrayTabla62["LOSA5_B2"] . '"/></td>
    <td><input type="text" name="LOSA5_B3" id="LOSA5_B3" size="3" value="' . $arrayTabla62["LOSA5_B3"] . '"/></td>
    <td><input type="text" name="LOSA5_B4" id="LOSA5_B4" size="3" value="' . $arrayTabla62["LOSA5_B4"] . '"/></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</footer>
</article>';
        return $sHTM;
    }

    function obtner_fecha() {
        $fecha = date(d - M - Y);

        return $fecha;
    }

}

?>