<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_9 SET 	Superficie_Terreno= '" . addslashes($_REQUEST['Superficiedellote9']) . "', Valor_Comercial_Mt2= '" . addslashes($_REQUEST['ValorcomercialporMT29']) . "',Factor_Inclinacion= '" . addslashes($_REQUEST['FactordeInclinacion9']) . "', Factor_Forma = '" . addslashes($_REQUEST['FactordeForma9']) . "' ,Factor_Comerciabilidad = '" . addslashes($_REQUEST['FactordeComerciabilidad9']) . "', Factor_Servicios = '" . addslashes($_REQUEST['FactordeServicios9']) . "', Valor_Total_Comercial_Terreno = '" . addslashes($_REQUEST['VALORTOTALCOMERCIALDELTERRENO9']) . "',Valor_Comercial_Mt2_Total = '" . addslashes($_REQUEST['VALORCOMERCIALMT2TOTAL9']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
