<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
$sHTM = '';
mysql_query("UPDATE 11_5 SET Conclusion = '" . addslashes($_REQUEST['observacionesfinales']) . "', Conclusion2 = '" . addslashes($_REQUEST['observacionesfinales2']) . "',Conclusion3 = '" . addslashes($_REQUEST['observacionesfinales3']) . "',Conclusion4 = '" . addslashes($_REQUEST['observacionesfinales4']) . "',Conclusion5 = '" . addslashes($_REQUEST['observacionesfinales5']) . "',Conclusion6 = '" . addslashes($_REQUEST['observacionesfinales6']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");
mysql_query("UPDATE tabla_19 SET Carta = '" . addslashes($_REQUEST['carta']) . "', Nombre = '" . addslashes($_REQUEST['nombre_carta']) . "', Empresa = '" . addslashes($_REQUEST['empresa_carta']) . "', Titulo = '" . addslashes($_REQUEST['titulo_carta']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
