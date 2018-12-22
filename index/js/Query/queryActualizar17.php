<?php
require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE 11_6 SET Valor_Comercial = '" . addslashes($_REQUEST['VALORCOMERCIALTOTALESSUS']) . "', Valor_Hipotecario = '" . addslashes($_REQUEST['VALORHIPOTECARIOTOTALESSUS']) . "', Valor_Catastral = '" . addslashes($_REQUEST['VALORCATASTRALTOTALESSUS']) . "', Valor_Liquidacion = '" . addslashes($_REQUEST['VALORLIQUIDACIONTOTALESSUS']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
