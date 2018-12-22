<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_7 SET Superficie_Lote = '" . addslashes($_REQUEST['SuperficiedelLote7']) . "', Valor_Impositivo_Mt2 = '" . addslashes($_REQUEST['ValorImpositivopormetrocuadrado7']) . "', Factor_Inclinacion = '" . addslashes($_REQUEST['FactordeInclinacion7']) . "', Factor_Forma = '" . addslashes($_REQUEST['FactordeForma7']) . "', Factor_Servicios = '" . addslashes($_REQUEST['FactordeServicios7']) . "', Valor_Impositivo_Mt2_Total  = '" . addslashes($_REQUEST['VALORIMPOSITIVOMT2TOTAL7']) . "', Valor_Catastral_Total = '" . addslashes($_REQUEST['VALORCATASTRALTOTALBS7']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
