<?php

/* * *****************************************************************
 * Clase: CCalculo
 * @copyright 2010
 * ***************************************************************** */

////////////////////////////////////////////////////////////////////
   require 'common/lib/Cliente_Controlador.php';
   
class CDatosAvaluo {
	var $objClienteControlador;
	
    function __construct() {
        $this->objClienteControlador = new Cliente_Controlador;
    }
    //desde aqui los divs de temoniage
	
	function ParteIzquierda()
	{  
        $arrayDatosCliente = $this->objClienteControlador->getArrayDatosTabla0($_SESSION['CodigoAvaluo']);
		$sHTM = '';
        $sHTM.='<table>';
        $sHTM.='<tr><td>Tipo de Inmueble :</td><td>
	<select name="TipoDeInmueble" id="TipoDeInmueble">';
	if($arrayDatosCliente['Tipo_Inmueble']=="Terreno")
	{
	$sHTM .='<option value="Terreno" selected="selected">Terreno</option>';	
	}
	else
	{
	$sHTM .='<option value="Terreno">Terreno</option>';		
	}
	if($arrayDatosCliente['Tipo_Inmueble']=="Vivienda")
	{
	$sHTM .='<option value="Vivienda" selected="selected">Vivienda</option>';
	}
	else
	{
	$sHTM .='<option value="Vivienda">Vivienda</option>';	
	}
	if($arrayDatosCliente['Tipo_Inmueble']=="Comercio")
	{
	$sHTM .='<option value="Comercio" selected="selected">Comercio</option>';
	}
	else
	{
	$sHTM .='<option value="Comercio">Comercio</option>';	
	}
	if($arrayDatosCliente['Tipo_Inmueble']=="Departamento")
	{
	$sHTM .='<option value="Departamento" selected="selected">Departamento</option>';
	}
	else
	{
	$sHTM .='<option value="Departamento">Departamento</option>';	
	}
	if($arrayDatosCliente['Tipo_Inmueble']=="Fabrica")
	{
	$sHTM .='<option value="Fabrica" selected="selected">Fabrica</option>';
	}
	else
	{
	$sHTM .='<option value="Fabrica">Fabrica</option>';	
	}
	if($arrayDatosCliente['Tipo_Inmueble']=="Garaje")
	{
	$sHTM .='<option value="Garaje" selected="selected">Garaje</option>';
	}
	else
	{
	$sHTM .='<option value="Garaje">Garaje</option>';	
	}
	
	</td></tr>';

        $sHTM.='<tr><td>Factor de Inclinacion  :</td><td>
	<select name="Factordeinclinacionp" id="FactordeinclinacionP">
	<option value="1">Seleccione</option>
	<option value="1">1</option>
	<option value="0.90">0.90</option>
	<option value="0.80">0.80</option>			
	</select>
		</td><tr>';

        $sHTM.='<tr><td>Factor de Forma  :</td><td>
	<select name="Factordeformap" id="FactordeformaP">
	<option value="1">Seleccione</option>
	<option value="1">1</option>
	<option value="0.90">0.90</option>
	<option value="0.80">0.80</option>			
	</select>
		</td><tr>';
		 $sHTM.='<tr><td>Factor de Comerciablidad  :</td><td>
	<select name="FactordeComerciabilidadP" id="FactordeComerciabilidadP">
	<option value="1">Seleccione</option>
	<option value="1">1</option>
	<option value="0.80">0.80</option>	
	<option value="0.60">0.60</option>
	<option value="0.40">0.40</option>
	<option value="0.20">0.20</option>		
	</select>
		</td></tr>'; 
	$sHTM.='</table>';
	
	return $sHTM;
	}
	
	
    function PrimerosDatos() {
        $sHTM = '';
        $sHTM.='<table>';

        $sHTM.='<tr><td>Superficie del Lote :</td><td><input type="text" name="SuperficiedelLote2" id="SuperficiedelLote2" size="7" />MT2</td><tr>';
        $sHTM.='<tr><td>Superficie construida :</td><td><input type="text" name="SuperficieConstruida2" id="SuperficieConstruida2" size="7" />MT2</td><tr>';
        $sHTM.='<tr><td>Valor Impositivo por MT2 :</td><td><input type="text" name="ValorImpositivopormetrocuadrado" id="ValorImpositivopormetrocuadrado" size="7" />BS.</td><tr>';
		       $sHTM.='<tr><td>Valor Comercial por MT2 :</td><td><input type="text" name="ValorcomercialporMT2P" id="ValorcomercialporMT2P" size="7" /> 
		SUS</td><tr>';
		    $sHTM.='<tr><td>Valor Comercial por MT2 Construido :</td><td><input type="text" name="ValorcomercialporMT2ConstrP" id="ValorcomercialporMT2ConstrP" size="7" /> 
		SUS</td><tr>';
				       $sHTM.='<tr><td>Valor catastral por M2 Construido :</td><td><input type="text" name="ValorcatastralpormetrocuadradoconstruidoP" id="ValorcatastralpormetrocuadradoconstruidoP" />BS 
		SUS</td><tr>';
		
					$sHTM.='<tr><td>Años de vida(Considerar para el factor de Depreciación) :</td><td>
	<select name="Anosdevida" id="Anosdevida">
	<option value="1">De 0 a 5</option>
	<option value="0.975">Mas de 6 a 10</option>
	<option value="0.925">Mas de 11 a 15</option>
	<option value="0.900">Mas de 16 a 20</option>
	<option value="0.850">Mas de 21 a 25</option>
	<option value="0.800">Mas de 26 a 30</option>
	<option value="0.700">Mas de 36 a 40</option>
	<option value="0.650">Mas de 41 a 45</option>
	<option value="0.600">Mas de 46 a 50</option>
	<option value="0.550">Mas de 51</option>
				
	</select>Años
	</td><tr>';
		
		$sHTM.='<tr><td>Tipo de cambio dolar</td><td><input name="TIPOCAMBIO" id="TIPOCAMBIO" value="6.90" type="text" size="4" /></td><tr>';
		
	    $sHTM.='<tr><td><div id="Info"></div><input type="hidden" value="'.$_SESSION['CodigoAvaluo'].'" name="codAvaluo" id="codAvaluo" /><input type="submit" value="Imprimir Avaluo" name="imprimir" id="imprimir" class="botonImprimir" /></td><tr>';
		
        $sHTM.='</table>';


        return $sHTM;
    }

    function InformacionGeneral() {
        $arrayDatosCliente = $this->objClienteControlador->getArrayDatosTabla1($_SESSION['CodigoAvaluo']);
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
		<input type="text" name="NombreSolicitante" id="NombreSolicitante" value="'.$arrayDatosCliente["Solicitante"].'">
		</td>
	</tr>
	<tr>
		<td>
		Propietario :
		</td>
		<td>
		<input type="text" name="Propietario" id="Propietario" value="'.$arrayDatosCliente["Propietario"].'">
		</td>
	</tr>
	<tr>
		<td>
		Ciudad :
		</td>
		<td>
		<select name="Ciudad" id="Ciudad">';
		if($arrayDatosCliente['Ciudad']=="La Paz")
		{
		$sHTM .='<option value="La Paz" selected="selected">La Paz</option>';
		}
		else
		{
		$sHTM .='<option value="La Paz">La Paz</option>';	
		}
		if($arrayDatosCliente['Ciudad']=="El Alto")
		{
		$sHTM .='<option value="El Alto" selected="selected">El Alto</option>';
		}
		else
		{
		$sHTM .='<option value="El Alto">El Alto</option>';	
		}
		if($arrayDatosCliente['Ciudad']=="Viacha")
		{
		$sHTM .='<option value="Viacha" selected="selected">Viacha</option>';
		}
		else
		{
		$sHTM .='<option value="Viacha">Viacha</option>';	
		}
		if($arrayDatosCliente['Ciudad']=="Palca")
		{
		$sHTM .='<option value="Palca" selected="selected">Palca</option>';
		}
		else
		{
		$sHTM .='<option value="Palca">Palca</option>';	
		}
		if($arrayDatosCliente['Ciudad']=="Copacabana")
		{
		$sHTM .='<option value="Copacabana" selected="selected">Copacabana</option>';
		}
		else
		{
		$sHTM .='<option value="Copacabana">Copacabana</option>';	
		}
		$sHTM .='</select>
		</td>
	</tr>
	<tr>
		<td>
		Zona :
		</td>
		<td>
		<select name="Zona" id="Zona">
			<option value="Sur">Sur</option>
			<option value="Norte">Norte</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Urbanización :
		</td>
		<td>
		<input type="text" name="Urbanizacion" id="Urbanizacion" value="'.$arrayDatosCliente["Urbanizacion"].'">
		</td>
	</tr>
	<tr>
		<td>
		Dirección :
		</td>
		<td>
		<input type="text" name="Direccion" id="Direccion">
		</td>
	</tr>
	<tr>
		<td>
		Manzana :
		</td>
		<td>
		<input type="text" name="Manzana" id="Manzana" value="s/n">
		</td>
	</tr>
	<tr>
		<td>
		Lote :
		</td>
		<td>
		<input type="text" name="Lote" id="Lote" value="s/n">
		</td>
	</tr>
	<tr>
		<td>
		Testimonio :
		</td>
		<td>
		<input type="text" name="Testimonio" id="Testimonio">
		</td>
	</tr>
	<tr>
		<td>
		Folio real :
		</td>
		<td>
		<input type="text" id="Folioreal" name="Folioreal">
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
		<input type="text" name="CODIGOCATASTRAL" id="CODIGOCATASTRAL">
		</td>
	</tr>
	<tr>
		<td>
		ULTIMO IMPUESTO :
		</td>
		<td>
		<input type="text" id="ULTIMOIMPUESTO" name="ULTIMOIMPUESTO">
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
		<textarea type="text" name="OBSERVACIONES2" id="OBSERVACIONES2" cols="29" rows="5"></textarea>
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
		<input type="text" name="VALORCOMERCIALBS2" id="VALORCOMERCIALBS2" size="10" class="cajaVerde" />
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORCOMERCIALSUS2" id="VALORCOMERCIALSUS2" size="10" class="cajaAzul" />
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
		<input type="text" name="VALORNETODEREALIZACIONOHIPOTECARIOBS2" id="VALORNETODEREALIZACIONOHIPOTECARIOBS2" size="10" class="cajaVerde" />
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORNETODEREALIZACIONOHIPOTECARIOSUS2" id="VALORNETODEREALIZACIONOHIPOTECARIOSUS2" size="10" class="cajaAzul"/>
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
		<input type="text" name="VALORCATASTRALBS" id="VALORCATASTRALBS" size="10" class="cajaVerde"/>
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORCATASTRALSUS2" id="VALORCATASTRALSUS2" size="10" class="cajaAzul"/>
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
		<input type="text" name="VALORDEVENTARAPIDAOLIQUIDACIONBS" id="VALORDEVENTARAPIDAOLIQUIDACIONBS" size="10" class="cajaVerde" />
		</td>
		<td>
		BS
		</td>
		<td>
		<input type="text" name="VALORDEVENTARAPIDAOLIQUIDACIONSUS2" id="VALORDEVENTARAPIDAOLIQUIDACIONSUS2" size="10" class="cajaAzul" />
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
		<select name="Usodesuelo" id="Usodesuelo">
			<option value="RESIDENCIAL">RESIDENCIAL</option>
			<option value="COMERCIAL">COMERCIAL</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Ancho de via :
		</td>
		<td>
		<input type="text" name="Anchodevia" id="Anchodevia" size="9" />ML.
		</td>
	</tr>
	<tr>
		<td>
		Material de via :
		</td>
		<td>
		<select name="Materialdevia" id="Materialdevia">
			<option value="Asflato">Asflato</option>
			<option value="Piedra">Piedra</option>
			<option value="Tierra">Tierra</option>
			<option value="Loseta">Loseta</option>
			<option value="Cemento">Cemento</option>
			<option value="Pavimentorigido">Pavimento rígido</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Tipo de via :
		</td>
		<td>
		<select name="Tipodevia" id="Tipodevia">
			<option value="Avenida">Avenida</option>
			<option value="Calle">Calle</option>
			<option value="Callejon">Callejon</option>
			<option value="Pasaje">Pasaje</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Aceras :
		</td>
		<td>
		<select name="Aceras" id="Aceras">
			<option value="Si">Si</option>
			<option value="No">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Transporte :
		</td>
		<td>
		<select name="Transporte" id="Transporte">
			<option value="Si">Si</option>
			<option value="No">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Densidad de población :
		</td>
		<td>
		<select name="Densidaddepoblacion" id="Densidaddepoblacion">
			<option value="DB">DB</option>
			<option value="DM">DM</option>
			<option value="DB">DA</option>
			<option value="DM">DMB</option>
			<option value="DM">DMA</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		<h5>DESCRIPCIÓN :</h5>
		</td>
		<td>
		<textarea name="Descripcion" id="Descripcion" cols="29" rows="5"></textarea>
		</td>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';
        return $sHTM;
    }

    function CaracteristicasdelTerreno() {
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
		<select name="AccesoVia" id="AccesoVia">
			<option value="Avenida">Avenida</option>
			<option value="Calle">Calle</option>
			<option value="Callejon">Callejon</option>
			<option value="Pasaje">Pasaje</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Superficie del Terreno :
		</td>
		<td>
		<input type="text" name="SuperficiedelTerreno4" id="SuperficiedelTerreno4">M2
		</td>
	</tr>
	<tr>
		<td>
		Frente :
		</td>
		<td>
		<input type="text" name="Frente" id="Frente" />ML
		</td>
	</tr>
	<tr>
		<td>
		Fondo :
		</td>
		<td>
		<input type="text" name="Fondo" id="Fondo" />ML
		</td>
	</tr>
	<tr>
		<td>
		Superficie construida :
		</td>
		<td>
		<input type="text" name="Superficieconstruida4" id="Superficieconstruida4" />M2
		</td>
	</tr>
	<tr>
		<td>
		Forma :
		</td>
		<td>
		<select name="Forma" id="Forma">
			<option value="Regular">Regular</option>
			<option value="Irregular">Irregular</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Topografía :
		</td>
		<td>
		<select name="Topografia" id="Topografia">
			<option value="Plana">Plana</option>
			<option value="Pendiente">Pendiente</option>
			<option value="PendientePronunciada">Pendiente Pronunciada</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Resistencia del suelo :
		</td>
		<td>
		<input type="text" name="Resistenciadelsuelo" id="Resistenciadelsuelo" value="s/n" />
		</td>
	</tr>
</table>

<footer>
<span class="author">Actualizar datos</span>
</footer>
</article>';
        return $sHTM;
    }

    function ServiciosBasicos() {
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
La Zona
</td>
<td>
El inmueble
</td>
</tr>
	<tr>
		<td>
		Agua potable :
		</td>
		<td>
		<select name="Aguapotable" id="Aguapotable">
			<option value="Si" >Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="Aguapotable5" id="Aguapotable5">
			<option value="0.2" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Energía Eléctrica :
		</td>
		<td>
		<select name="EnergiaElectrica" id="EnergiaElectrica">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="EnergiaElectrica5" id="EnergiaElectrica5">
			<option value="0.2" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Servicio Telefónico :
		</td>
		<td>
		<select name="ServicioTelefonico" id="ServicioTelefonico">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="ServicioTelefonico5" id="ServicioTelefonico5">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Alcantarillado Público :
		</td>
		<td>
		<select name="AlcantarilladoPublico" id="AlcantarilladoPublico">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="AlcantarilladoPublico5" id="AlcantarilladoPublico5">
			<option value="0.2" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Gas Domiciliario :
		</td>
		<td>
		<select name="GasDomiciliario" id="GasDomiciliario">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="GasDomiciliario5" id="GasDomiciliario5">
			<option value="0.2" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		Internet :
		</td>
		<td>
		<select name="Internet" id="Internet">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="Internet5" id="Internet5">
			<option value="0.1" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	<tr>
	<tr>
		<td>
		Cable :
		</td>
		<td>
		<select name="Cable" id="Cable">
			<option value="Si">Si</option>
			<option value="No" selected="selected">No</option>
		</select>
		</td>
		<td>
		<select name="Cable5" id="Cable5">
			<option value="0.1" selected="selected">Si</option>
			<option value="0" selected="selected">No</option>
		</select>
		</td>
	</tr>
	</table>
	<table width="70%" class="Tabla1">
	<tr>
	<td>
					<h5>Observaciones:</h5>
	</td>
		<td>
		<h5><textarea type="text" name="Observaciones6" id="Observaciones6" cols="29" rows="5"></textarea></h5>
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
		<td>
		<input type="checkbox" name="Residencial" id="Residencial">
		</td>
		<td align="right">
		Oficina:
		</td>
		<td>
		<input type="checkbox" name="Oficina" id="Oficina">
		</td>
		<td align="right">
		Comercial:
		</td>
		<td>
		<input type="checkbox" name="Comercial" id="Comercial">
		</td>
		<td align="right">
		Otros:
		</td>
		<td>
		<input type="text" name="Otros6" id="Otros6" />
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
		<td>
		<input type="checkbox" name="Propietarios" id="Propietarios">
		</td>
		<td align="right">
		Inquilinos:
		</td>
		<td>
		<input type="checkbox" name="Inquilinos" id="Inquilinos">
		</td>
		<td>
		</td>
		<td>
		</td>
		<td align="right">
		Otros:
		</td>
		<td>
		<input type="text" name="Otros62" id="Otros62">
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
		<td>
		<input type="checkbox" name="Lujo" id="Lujo">
		</td>
		<td align="right">
		Semilujo :
		</td>
		<td>
		<input type="checkbox" name="Semilujo" id="Semilujo">
		</td>
		<td align="right">
		Standart :
		</td>
		<td>
		<input type="checkbox" name="Standart" id="Standart">
		</td>
		<td align="right">
		Económico :
		</td>
		<td>
		<input type="checkbox" name="Economico" id="Economico">
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
		<td>
		<input type="checkbox" name="Bueno" id="Bueno">
		</td>
		<td align="right">
		Regular :
		</td>
		<td>
		<input type="checkbox" name="Regular" id="Regular">
		</td>
		<td align="right">
		Malo :
		</td>
		<td>
		<input type="checkbox" name="Malo" id="Malo">
		</td>
		<td align="right">
		Muy Malo :
		</td>
		<td>
		<input type="checkbox" name="MuyMalo" id="MuyMalo">
		</td>
	</tr>
	<tr>
<td class="Tabla2">
Antiguedad :
</td>
<td>
<input type="text" name="Antiguedad" id="Antiguedad" />
</td>
</tr>
<tr>
<td class="Tabla2">
Descripcion :
</td>
<td>
<input type="text" name="Descripcion7" id="Descripcion7" />
</td>
</tr>
<tr>
<td class="Tabla2">
Numero de ambientes:
</td>
<td>
<input type="text" name="Numerodeambientes" id="Numerodeambientes" value="Varios" /">
</td>
</tr>
<tr>
<td class="Tabla2">
Numero de bloques :
</td>
<td>
		<select name="Numerodebloques" id="Numerodebloques">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="1">3</option>
			<option value="2">4</option>
		</select>
</td>
</tr>
</table>

</footer>
</article>';
        return $sHTM;
    }
	
	
	    function CaracteristicasDatosTecnicosdelaCpnstruccion() {
        $sHTM = '';
        $sHTM.='<article class="post">
<header>
<h3>6. Caracteristicas de la edificación</h3>
</header>
<p>
<table width="100%" border="1" class="Tabla1">
  <tr>
    <td colspan="15"><p>Datos técnicos de la construcción</p></td>
  </tr>
  <tr>
    <td width="161">OBRA GRUESA</td>
    <td width="18">B1</td>
    <td width="18">B2</td>
    <td width="18">B3</td>
    <td width="18">B4</td>
    <td width="229">ACABADOS REVESTIMIENTOS</td>
    <td width="21">B1</td>
    <td width="21">B2</td>
    <td width="21">B3</td>
    <td width="21">B4</td>
    <td width="85">FACHADA</td>
    <td width="21">B1</td>
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
    <td>MATERIALES ESPECIALES</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>H° A° PILOTAJE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TIERRA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MÁRMOL</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>H° A° RADIER</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CERÁMICA ESMALTADA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CERÁMICA ESMALTADA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CERÁMICA ROJA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>PLACAS DE PIEDRA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>METÁLICA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>ALFOMBRADO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CEMENTO + CAL +ARENA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PIEDRA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>ENTABLONADO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>PIEDRA O LADRILLO VISTO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>LADRILLO PORTANTE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>PARQUET</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CAL</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ADOBE PROTANTE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MACHIMBRADO</td>
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
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CEMENTO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MADERA 1° CLASE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>LOSA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>ALUMINIOS</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PIEDRA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><h5>CIELOS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MADERA 2° CLASE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>LADRILLO GAMBOTE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MATERIALES ESPECIALES</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>METÁLICA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>BLOQUE DE CEMENTO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MADERA</td>
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
  <tr>
    <td>LADRILLO HUECO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>YESO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><h5>VENTANAS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
  </tr>
  <tr>
    <td>ADOBE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>COTENCIO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MADERA 1° CLASE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MADERA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><h5>MUROS INTERIORES</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>ALUMINIOS</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h5>CUBIERTAS</h5></td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>%</td>
    <td>MTERIALES ESPECIALES</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MADERA 2° CLASE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>HORMIGON ARMADO</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MARMOS</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>METÁLICAS</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>TEJA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CERÁMICA ESMALTADA</td>
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
  <tr>
    <td>TEJA ASFÁLTICA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MOSAICO</td>
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
  <tr>
    <td>PLACA SHINGLE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MADERA</td>
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
  <tr>
    <td>CALAMINAS ZINC</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>YESO CON PINTURA</td>
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
  <tr>
    <td>CALAMINA PLÁSTICA</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CEMENTO CON OCRE</td>
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
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>BARRO CON CAL</td>
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
  <tr>
    <td>OBSERVACIONES:</td>
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
	
	function obtner_fecha()
	{
		$fecha=date(d-M-Y);
		
		return $fecha;
	}

}

?>