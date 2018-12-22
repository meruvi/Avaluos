<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_10 SET Superficie_Construida = '" . addslashes($_REQUEST['SuperficieConstruida10']) . "', 	Valor_Comercial_Mt2_Construido = '" . addslashes($_REQUEST['ValorcomercialporMTconstruido10']) . "', Factor_Depreciacion = '" . addslashes($_REQUEST['FactordeDepreciacion10']) . "', Valor_Total_Construccion_Mt2= '" . addslashes($_REQUEST['VALORTOTALDELACONSTRUCCION10']) . "', Valor_Total_Construccion = '" . addslashes($_REQUEST['VALORTOTALCOMERCIALDELTERRENO10']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
