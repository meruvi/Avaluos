<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE 11_3 SET Valor_Unitario_T = '" . addslashes($_REQUEST['VALORDELTERRENOINMUEBLE']) . "', Superficie_T = '" . addslashes($_REQUEST['VALORDELTERRENOSUPERFICIEINMUEBLE']) . "', Total_T = '" . addslashes($_REQUEST['VALORDELTERRENOTOTALINMUEBLE']) . "', Valor_Unitario_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONINMUEBLE']) . "', Superficie_C = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONSUPERFICIEINMUEBLE']) . "', Total_C  = '" . addslashes($_REQUEST['VALORDELACONSTRUCCIONTOTALINMUEBLE']) . "', Valor_Catastral_Total = '" . addslashes($_REQUEST['VALORCATASTRALTOTALSUS']) . "', Valor_Catastral_Total_Bs = '" . addslashes($_REQUEST['VALORCATASTRALTOTALBS']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
