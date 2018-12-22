<?php

require '../common/lib/config.php';
require '../common/lib/Base_Datos.php';
require '../common/lib/Cliente_Controlador.php';
require '../common/lib/Conexion.php';

error_reporting(E_PARSE);
$objConexion = new Conexion;
$objConexion->conectarse_Admin();
$objClienteControlador = new Cliente_Controlador;


//AQUI PONER LOS SCRIPS DE ALMACENAMIENTO DE INSTITUCUIN, USUARIOS, DESCUENTO, Y LA CREACION DE CARPETAS



$codigoHTML = '';
if (!empty($_GET["ACCION"])) {
    switch ($_GET["ACCION"]) {


        case 'GuardaDatosPrincipio':
            //creamos array
            $CodigoNuevo = $objClienteControlador->getCodigoCliente();
            session_start();
            $_SESSION['CodigoAvaluo'] = $CodigoNuevo;
            $array = array();
            $array['SOLICITANTE'] = $_POST['SOLICITANTE'];
            $array['PROPIETARIO'] = $_POST['PROPIETARIO'];
            $array['INMUEBLEAVALUO'] = $_POST['INMUEBLEAVALUO'];
            $array['URBANIZACION'] = $_POST['URBANIZACION'];
            $array['JURISDICCION'] = $_POST['JURISDICCION'];
            $array['SubirFoto'] = $_FILES['SubirFoto']['name'];
            $array['SubirFoto2'] = $_FILES['SubirFoto2']['name'];
            $array['SubirFoto3'] = $_FILES['SubirFoto3']['name'];
            $array['SubirFoto4'] = $_FILES['SubirFoto4']['name'];
            $array['SubirFoto5'] = $_FILES['SubirFoto5']['name'];
            $array['SubirFoto6'] = $_FILES['SubirFoto6']['name'];
            $array['SubirFoto7'] = $_FILES['SubirFoto7']['name'];
            $array['SubirFoto8'] = $_FILES['SubirFoto8']['name'];
            $array['SubirFoto9'] = $_FILES['SubirFoto9']['name'];
            $array['SubirFoto10'] = $_FILES['SubirFoto10']['name'];
            $array['SubirFoto11'] = $_FILES['SubirFoto11']['name'];
            $array['SubirFoto12'] = $_FILES['SubirFoto12']['name'];
            $array['SubirFoto13'] = $_FILES['SubirFoto13']['name'];

            $objClienteControlador->insertaCliente($CodigoNuevo, $array);

            mkdir('../fotos/' . $CodigoNuevo, 0777);
            chmod('../fotos/' . $CodigoNuevo, 0777);
            if ($_FILES['SubirFoto']['name'] != "") {
                copy($_FILES['SubirFoto']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto']['name']);
            }
            if ($_FILES['SubirFoto2']['name'] != "") {
                copy($_FILES['SubirFoto2']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto2']['name']);
            }
            if ($_FILES['SubirFoto3']['name'] != "") {
                copy($_FILES['SubirFoto3']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto3']['name']);
            }
            if ($_FILES['SubirFoto4']['name'] != "") {
                copy($_FILES['SubirFoto4']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto4']['name']);
            }
            if ($_FILES['SubirFoto5']['name'] != "") {
                copy($_FILES['SubirFoto5']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto5']['name']);
            }
            if ($_FILES['SubirFoto6']['name'] != "") {
                copy($_FILES['SubirFoto6']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto6']['name']);
            }
            if ($_FILES['SubirFoto7']['name'] != "") {
                copy($_FILES['SubirFoto7']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto7']['name']);
            }
            if ($_FILES['SubirFoto8']['name'] != "") {
                copy($_FILES['SubirFoto8']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto8']['name']);
            }
            if ($_FILES['SubirFoto9']['name'] != "") {
                copy($_FILES['SubirFoto9']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto9']['name']);
            }
            if ($_FILES['SubirFoto10']['name'] != "") {
                copy($_FILES['SubirFoto10']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto10']['name']);
            }
            if ($_FILES['SubirFoto11']['name'] != "") {
                copy($_FILES['SubirFoto11']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto11']['name']);
            }
            if ($_FILES['SubirFoto12']['name'] != "") {
                copy($_FILES['SubirFoto12']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto12']['name']);
            }
            if ($_FILES['SubirFoto13']['name'] != "") {
                copy($_FILES['SubirFoto13']['tmp_name'], "../fotos/" . $CodigoNuevo . "/" . $_FILES['SubirFoto13']['name']);
            }
            break;
    }
} else {
    //$codigoHTML .= $this->ListarConsorcios();
}

$objConexion->desconectarse_Admin();
header("Location:  ../Avaluo.php?Tipo=" . $_POST['INMUEBLEAVALUO']);



