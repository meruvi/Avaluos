<?php

require '../../../common/lib/config.php';
require '../../../common/lib/Base_Datos.php';
require '../../../common/lib/Conexion.php';
//$codigoRegion = $_POST["CODIGOREGION"];
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
sleep(1);
		$sHTM = '';
		       mysql_query("UPDATE tabla_1 SET 	Solicitante = '" . addslashes($_REQUEST['NombreSolicitante']) . "', Propietario = '" . addslashes($_REQUEST['Propietario']) . "', Ciudad = '" . addslashes($_REQUEST['Ciudad']) . "',Zona = '" . addslashes($_REQUEST['Zona']) . "',Urbanizacion = '" . addslashes($_REQUEST['Urbanizacion']) . "',Direccion = '" . addslashes($_REQUEST['Direccion']) . "',Manzana = '" . addslashes($_REQUEST['Manzana']) . "',Lote = '" . addslashes($_REQUEST['Lote']) . "',Testimonio = '" . addslashes($_REQUEST['Testimonio']) . "',Folio_Real = '" . addslashes($_REQUEST['Folioreal']) . "',Codigo_Catastral = '" . addslashes($_REQUEST['CODIGOCATASTRAL']) . "',Ultimo_Impuesto = '" . addslashes($_REQUEST['ULTIMOIMPUESTO']) . "',Observaciones = '" . addslashes($_REQUEST['OBSERVACIONES2']) . "' WHERE Codigo_Avaluo ='" . addslashes($_REQUEST['codAvaluo']) . "';");


$objConexion->desconectarse_Admin();
echo $sHTM;
?>
