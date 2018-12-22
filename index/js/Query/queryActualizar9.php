<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_8 SET Valor_Catastral_Mt2_Construido = '" . addslashes($_REQUEST['Valorcatastralpormetrocuadradoconstruido8']) . "', Factor_Depreciacion = '" . addslashes($_REQUEST['FactordeDepreciacion']) . "', Superficie_Construida = '" . addslashes($_REQUEST['SuperficieConstruida8']) . "', Valor_Catastral_Mt2_Total= '" . addslashes($_REQUEST['VALORCATASTRALM2TOTAL8']) . "', Valor_Catastral_Total = '" . addslashes($_REQUEST['VALORCATASTRALTOTAL8']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
