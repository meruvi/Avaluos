<?php
require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_11_7_bs SET Valor_Comercial = '" . addslashes($_REQUEST['VALORCOMERCIALTOTALESBS']) . "', Valor_Hipotecario = '" . addslashes($_REQUEST['VALORHIPOTECARIOTOTALESBS']) . "', Valor_Catastral = '" . addslashes($_REQUEST['VALORCATASTRALTOTALESBS']) . "', Valor_Liquidacion = '" . addslashes($_REQUEST['VALORLIQUIDACIONTOTALESBS']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
