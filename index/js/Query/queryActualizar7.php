<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_6 SET Residencial = '" . addslashes($_REQUEST['Residencial']) . "', Oficina = '" . addslashes($_REQUEST['Oficina']) . "', Comercial = '" . addslashes($_REQUEST['Comercial']) . "',	Otros_Uso = '" . addslashes($_REQUEST['Otros6']) . "',Propietarios = '" . addslashes($_REQUEST['Propietarios']) . "',Inquilinos = '" . addslashes($_REQUEST['Inquilinos']) . "',Otros_Ocupacion = '" . addslashes($_REQUEST['Otros62']) . "',Lujo = '" . addslashes($_REQUEST['Lujo']) . "',Semilujo = '" . addslashes($_REQUEST['Semilujo']) . "',Standart = '" . addslashes($_REQUEST['Standart']) . "',Economico = '" . addslashes($_REQUEST['Economico']) . "',Bueno = '" . addslashes($_REQUEST['Bueno']) . "',Regular = '" . addslashes($_REQUEST['Regular']) . "',Malo = '" . addslashes($_REQUEST['Malo']) . "',Muy_Malo = '" . addslashes($_REQUEST['MuyMalo']) . "',Antiguedad = '" . addslashes($_REQUEST['Antiguedad']) . "',Descripcion = '" . addslashes($_REQUEST['Descripcion7']) . "',Numero_Ambientes = '" . addslashes($_REQUEST['Numerodeambientes']) . "',Numero_Bloques = '" . addslashes($_REQUEST['Numerodebloques']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
