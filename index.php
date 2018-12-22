<?php

/*******************************************************************
 * Clase: avaluo
 * @author: carlos macchiavelli ortuno
 * @copyright 2012
*******************************************************************/
error_reporting(E_PARSE);
session_start();
if($_SESSION['Nombre_Administrador']=="")
{
//include "index/CLogin.php";	
    //Abrir archivo
    $fArchivo=fopen('./login/template/index.html','r');
    //Almacenar contenido del archivo en $HTML
    $sHTML = fread ($fArchivo,filesize('./login/template/index.html'));
    //Cerrar archivo
    fclose($fArchivo);


}
else{
include "index/CIndex.php";
			require 'common/lib/config.php';
require 'common/lib/Base_Datos.php';
require 'common/lib/Conexion.php';
require 'common/lib/Cliente_Controlador.php';
if (file_exists('./temas/ban/indexPrincipio.html'))
{
    //Abrir archivo
    $fArchivo=fopen('./temas/ban/indexPrincipio.html','r');
    //Almacenar contenido del archivo en $HTML
    $sHTML = fread ($fArchivo,filesize('./temas/ban/indexPrincipio.html'));
    //Cerrar archivo
    fclose($fArchivo);
}
else
{
    die ('3: No se encontro el tema actual para el sitio web');
}

//eclaramos el script para validacion de banderole
$sHTML = str_replace('ScriptAjaxLibreria', '<script src="./temas/ban/js/jquery-1.8.3.min.js" type="text/javascript"></script>',$sHTML);
$sHTML = str_replace('ScriptAjax','',$sHTML);

//Titulos
$sHTML = str_replace('TITULO-PAGINA-AVALUOS', "",$sHTML);

//Contenido
$objArtic =new CIndex;

$sHTML = str_replace('InformacionGeneral', $objArtic->InformacionPrincipio(),$sHTML);
$sHTML = str_replace('AVaLUosREaLizaDos', $objArtic->AvaluosRealizado(),$sHTML);
}
echo $sHTML;
?>
