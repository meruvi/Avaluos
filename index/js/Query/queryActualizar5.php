<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_4 SET 	Acceso_Via = '" . addslashes($_REQUEST['AccesoVia']) . "', Superficie_Terreno = '" . addslashes($_REQUEST['SuperficiedelTerreno4']) . "', Frente = '" . addslashes($_REQUEST['Frente']) . "',Fondo = '" . addslashes($_REQUEST['Fondo']) . "',Superficie_Construida = '" . addslashes($_REQUEST['Superficieconstruida4']) . "',Forma = '" . addslashes($_REQUEST['Forma']) . "',Topografia = '" . addslashes($_REQUEST['Topografia']) . "',Resistencia_Suelo= '" . addslashes($_REQUEST['Resistenciadelsuelo']) . "',COLINDANCIA_NORTE= '" . addslashes($_REQUEST['Norte']) . "',COLINDANCIA_SUR= '" . addslashes($_REQUEST['Sur']) . "',COLINDANCIA_ESTE= '" . addslashes($_REQUEST['Este']) . "',COLINDANCIA_OESTE= '" . addslashes($_REQUEST['Oeste']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
