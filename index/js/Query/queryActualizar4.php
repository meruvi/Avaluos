<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_3 SET 	Uso_Suelo = '" . addslashes($_REQUEST['Usodesuelo']) . "', Ancho_Via = '" . addslashes($_REQUEST['Anchodevia']) . "', Material_Via = '" . addslashes($_REQUEST['Materialdevia']) . "',Tipo_Via = '" . addslashes($_REQUEST['Tipodevia']) . "',Aceras = '" . addslashes($_REQUEST['Aceras']) . "',Transporte = '" . addslashes($_REQUEST['Transporte']) . "',Densidad_Poblacion = '" . addslashes($_REQUEST['Densidaddepoblacion']) . "',Descripcion = '" . addslashes($_REQUEST['Descripcion']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
