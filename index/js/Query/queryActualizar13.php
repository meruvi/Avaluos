<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE 11_2 SET Valor_Comercial_T = '" . addslashes($_REQUEST['VALORDELTERRENOHIPOTECARIOH']) . "', Porcentaje_T = '" . addslashes($_REQUEST['VALORDELTERRENOPORCENTAJEHIPOTECARIO']) . "', Valor_Comercial_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONHIPOTECARIO']) . "', Porcentaje_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONPORCENTAJEHIPOTECARIO']) . "', Total_T = '" . addslashes($_REQUEST['VALORDELTERRENOTOTALHIPOTECARIO']) . "', Total_C  = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONTOTALHIPOTECARIO']) . "', Valor_Hipotecario = '" . addslashes($_REQUEST['VALORHIPOTECARIO']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
