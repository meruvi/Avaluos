<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_0 SET Tipo_Inmueble = '" . addslashes($_REQUEST['TipoDeInmueble']) . "', Superficie_Lote = '" . addslashes($_REQUEST['SuperficiedelLote2']) . "', Superficie_Construida = '" . addslashes($_REQUEST['SuperficieConstruida2']) . "',Valor_Impositivo_Mt2 = '" . addslashes($_REQUEST['ValorImpositivopormetrocuadrado']) . "',Valor_Comercial_Mt2 = '" . addslashes($_REQUEST['ValorcomercialporMT2P']) . "',Valor_Comercial_Mt2_Construido = '" . addslashes($_REQUEST['ValorcomercialporMT2ConstrP']) . "',Valor_Catastral_Mt2_Construido = '" . addslashes($_REQUEST['ValorcatastralpormetrocuadradoconstruidoP']) . "',Anos_Vida = '" . addslashes($_REQUEST['Anosdevida']) . "',Factor_Inclinacion = '" . addslashes($_REQUEST['FactordeinclinacionP']) . "',Factor_Forma = '" . addslashes($_REQUEST['FactordeformaP']) . "',Factor_Comerciabilidad = '" . addslashes($_REQUEST['FactordeComerciabilidadP']) . "' , Tipo_Cambio = '" . addslashes($_REQUEST['TIPOCAMBIO']) . "'  WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
