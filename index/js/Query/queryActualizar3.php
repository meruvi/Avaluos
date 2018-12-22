<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_2 SET 	Valor_Comercial = '" . addslashes($_REQUEST['VALORCOMERCIALSUS2']) . "', Valor_Comercial_Bs = '" . addslashes($_REQUEST['VALORCOMERCIALBS2']) . "', Valor_Hipotecario = '" . addslashes($_REQUEST['VALORNETODEREALIZACIONOHIPOTECARIOSUS2']) . "', Valor_Hipotecario_Bs = '" . addslashes($_REQUEST['VALORNETODEREALIZACIONOHIPOTECARIOBS2']) . "', Valor_Catastral = '" . addslashes($_REQUEST['VALORCATASTRALSUS2']) . "', Valor_Catastral_Bs = '" . addslashes($_REQUEST['VALORCATASTRALBS']) . "', Valor_Liquidacion = '" . addslashes($_REQUEST['VALORDEVENTARAPIDAOLIQUIDACIONSUS2']) . "',Valor_Liquidacion_Bs = '" . addslashes($_REQUEST['VALORDEVENTARAPIDAOLIQUIDACIONBS']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
