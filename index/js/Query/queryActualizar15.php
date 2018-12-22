<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_11_4 SET Valor_Comercial_T = '" . addslashes($_REQUEST['VALORDELTERRENOLIQUIDACION']) . "', Porcentaje_T = '" . addslashes($_REQUEST['VALORDELTERRENOPORCENTAJELIQUIDACION']) . "', Valor_Comercial_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONLIQUIDACION']) . "', Porcentaje_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONPORCENTAJELIQUIDACION']) . "', Total_T = '" . addslashes($_REQUEST['VALORDELTERRENOTOTALLIQUIDACION']) . "', Total_C  = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONTOTALLIQUIDACION']) . "', Valor_Liquidacion_Venta_Rapida = '" . addslashes($_REQUEST['VALORLIQUIDACION']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
