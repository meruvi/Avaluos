<?php

/* * *****************************************************************
 * Clase: avaluo
 * @author: carlos macchiavelli ortuno
 * @copyright 2012
 * ***************************************************************** */
session_start();
error_reporting(E_PARSE);
include "index/CDatosAvaluo.php";
include "index/CCalculoAvaluo.php";

include "index/CIndex.php";
require 'common/lib/config.php';
require 'common/lib/Base_Datos.php';
require 'common/lib/Conexion.php';

$objConexion = new Conexion;
$objConexion->conectarse_Admin();

if ($_GET['CodigoAvaluo'] != "") {
    session_start();
    $_SESSION['CodigoAvaluo'] = $_GET['CodigoAvaluo'];
}
if (file_exists('./temas/ban/index.html')) {
    //Abrir archivo
    $fArchivo = fopen('./temas/ban/index.html', 'r');
    //Almacenar contenido del archivo en $HTML
    $sHTML = fread($fArchivo, filesize('./temas/ban/index.html'));
    //Cerrar archivo
    fclose($fArchivo);
} else {
    die('3: No se encontro el tema actual para el sitio web');
}
if ($_GET['Tipo'] == "Departamento") {
    //eclaramos el script para validacion de banderole
    $sHTML = str_replace('ScriptAjaxLibreria', '<script src="./temas/ban/js/jquery-1.8.3.min.js" type="text/javascript"></script>', $sHTML);
    $sHTML = str_replace('ScriptAjax', '<script type="text/javascript" src="./index/js/JQueryCamposClaveDEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos2.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos3.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos4.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos5.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos6.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos7.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos8.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos9.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos10.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos11DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos12DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos13DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos14DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos15.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos16.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos17.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos18.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCamposTabla6.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla7.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosFactordeServiciosDEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla8.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla9.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla10.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla11DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla12DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla13DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla14DEPARTAMENTO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla15.js"></script>', $sHTML);
} else {
    if ($_GET['Tipo'] == "Terreno") {
        //eclaramos el script para validacion de banderole
        $sHTML = str_replace('ScriptAjaxLibreria', '<script src="./temas/ban/js/jquery-1.8.3.min.js" type="text/javascript"></script>', $sHTML);
        $sHTML = str_replace('ScriptAjax', '<script type="text/javascript" src="./index/js/JQueryCamposClaveTerreno.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos2.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos3.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos4.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos5.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos6.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos7.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos8.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos9.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos10.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos11TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos12TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos13TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos14TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos15.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos16.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos17.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos18.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCamposTabla6.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla7.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosFactordeServiciosTERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla8.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla9.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla10.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla11TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla12TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla13TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla14TERRENO.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla15.js"></script>', $sHTML);
    } else {
        //eclaramos el script para validacion de banderole
        $sHTML = str_replace('ScriptAjaxLibreria', '<script src="./temas/ban/js/jquery-1.8.3.min.js" type="text/javascript"></script>', $sHTML);
        $sHTML = str_replace('ScriptAjax', '<script type="text/javascript" src="./index/js/JQueryCamposClave.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos2.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos3.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos4.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos5.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos6.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos7.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos8.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos9.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos10.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos11.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos12.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos13.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos14.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos15.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos16.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos17.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCampos18.js"></script>
<script type="text/javascript" src="./index/js/JQueryActualizarCamposTabla6.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla7.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosFactordeServicios.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla8.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla9.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla10.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla11.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla12.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla13.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla14.js"></script>
<script type="text/javascript" src="./index/js/JQueryCalculosTabla15.js"></script>', $sHTML);
    }
}
//Titulos
$sHTML = str_replace('TITULO-PAGINA-AVALUOS', "", $sHTML);

//Contenido
$objArtic = new CDatosAvaluo;

$sHTML = str_replace('ParteIzquierda', $objArtic->ParteIzquierda($_GET['Tipo']), $sHTML);

$sHTML = str_replace('InformacionGeneral', $objArtic->InformacionGeneral(), $sHTML);

$sHTML = str_replace('priMerosDaTos', $objArtic->PrimerosDatos($_GET['Tipo']), $sHTML);

$sHTML = str_replace('CarGaImagen', $objArtic->cargaImagen(), $sHTML);

$sHTML = str_replace('TablaDeValores', $objArtic->TablaDeValores(), $sHTML);

$sHTML = str_replace('CaracteristicasDeLaZona', $objArtic->CaracteristicasDeLaZona(), $sHTML);
if ($_GET['Tipo'] != "Departamento") {
    $sHTML = str_replace('CaracteristicasdelTerreno', $objArtic->CaracteristicasdelTerreno($_GET['Tipo']), $sHTML);
}

$sHTML = str_replace('ServiciosBasicos', $objArtic->ServiciosBasicos($_GET['Tipo']), $sHTML);

if ($_GET['Tipo'] != "Terreno") {
    $sHTML = str_replace('CaracteristicasDeLaEdificacion', $objArtic->CaracteristicasDeLaEdificacion(), $sHTML);
}

if ($_GET['Tipo'] != "Terreno") {
    $sHTML = str_replace('CaracteristicasDatosTecnicosdelaCpnstruccion', $objArtic->CaracteristicasDatosTecnicosdelaCpnstruccion(), $sHTML);
}

$sHTML = str_replace('TablaDeValores', $objArtic->TablaDeValores(), $sHTML);

//Contenido
$objArtic = new CCalculoAvaluo;
if ($_GET['Tipo'] != "Departamento") {
    $sHTML = str_replace('Calculodelvalorcatastraldelterreno', $objArtic->Calculodelvalorcatastraldelterreno(), $sHTML);
}
if ($_GET['Tipo'] != "Terreno") {
    $sHTML = str_replace('Calculodelvalorcatastraldelaconstruccion', $objArtic->Calculodelvalorcatastraldelaconstruccion(), $sHTML);
}
if ($_GET['Tipo'] != "Departamento") {
    $sHTML = str_replace('Calculodelvalortecnicocomercialdelterreno', $objArtic->Calculodelvalortecnicocomercialdelterreno(), $sHTML);
}
//$sHTML = str_replace('CalculodelvalortecnicocomercialDelterrenoenBS', $objArtic->CalculodelvalortecnicocomercialdelterrenoenBS(),$sHTML);
$sHTML = str_replace('CalculodelvalortecnicocomercialDelterrenoenBS', "", $sHTML);

if ($_GET['Tipo'] != "Terreno") {
    $sHTML = str_replace('Calculodelvalortecnicocomercialdelaconstruccion', $objArtic->Calculodelvalortecnicocomercialdelaconstruccion(), $sHTML);
}

$sHTML = str_replace('TOTALESAVALUOTECNICOCOMERCIALDELINMUEBLE', $objArtic->TOTALESAVALUOTECNICOCOMERCIALDELINMUEBLE($_GET['Tipo']), $sHTML);

$sHTML = str_replace('TOTALESVALORHIPOTECARIO', $objArtic->TOTALESVALORHIPOTECARIO($_GET['Tipo']), $sHTML);

$sHTML = str_replace('TOTALESAVALUOCATASTRALFINALDELINMUEBLE', $objArtic->TOTALESAVALUOCATASTRALFINALDELINMUEBLE($_GET['Tipo']), $sHTML);

$sHTML = str_replace('VALORDELIQUIDACIONOVENTARAPIDA', $objArtic->VALORDELIQUIDACIONOVENTARAPIDA($_GET['Tipo']), $sHTML);

$sHTML = str_replace('CONCLUSIONES', $objArtic->CONCLUSIONES(), $sHTML);

$sHTML = str_replace('CARTA', $objArtic->CARTA(), $sHTML);

$sHTML = str_replace('TABLATOTALDEVALORES', $objArtic->TABLATOTALDEVALORES(), $sHTML);

$sHTML = str_replace('TABLATOTALVALORESBS', $objArtic->TABLATOTALVALORESBS(), $sHTML);


echo $sHTML;
?>
