<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_5 SET Agua_Zona = '" . addslashes($_REQUEST['Aguapotable']) . "', Agua_Inmueble = '" . addslashes($_REQUEST['Aguapotable5']) . "', Energia_Zona = '" . addslashes($_REQUEST['EnergiaElectrica']) . "',	Energia_Inmueble = '" . addslashes($_REQUEST['EnergiaElectrica5']) . "',Telefono_Zona = '" . addslashes($_REQUEST['ServicioTelefonico']) . "',Telefono_Inmueble = '" . addslashes($_REQUEST['ServicioTelefonico5']) . "',Alcantarillado_Zona = '" . addslashes($_REQUEST['AlcantarilladoPublico']) . "',Alcantarillado_Inmueble = '" . addslashes($_REQUEST['AlcantarilladoPublico5']) . "',Gas_Zona = '" . addslashes($_REQUEST['GasDomiciliario']) . "',Gas_Inmueble = '" . addslashes($_REQUEST['GasDomiciliario5']) . "',Internet = '" . addslashes($_REQUEST['Internet']) . "',Internet_Inmueble = '" . addslashes($_REQUEST['Internet5']) . "',Cable = '" . addslashes($_REQUEST['Cable']) . "',Cable_Inmueble = '" . addslashes($_REQUEST['Cable5']) . "',Observaciones = '" . addslashes($_REQUEST['Observaciones6']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
