<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_11 SET Valor_Unitario_T = '" . addslashes($_REQUEST['VALORDELTERRENO11']) . "', Superficie_T = '" . addslashes($_REQUEST['VALORDELTERRENOSUPERFICIE11']) . "', Total_T = '" . addslashes($_REQUEST['VALORDELTERRENOTOTAL11']) . "', Valor_Unitario_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCION11']) . "', Superficie_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONSUPERFICIE11']) . "', Total_C  = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONTOTAL11']) . "', 	Valor_Comercial_Total = '" . addslashes($_REQUEST['VALORCOMERCIALTOTAL11']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
