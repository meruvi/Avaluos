<?php

require 'query/Cliente_Query.php';

class Cliente_Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Cliente_Query;
    }

    public static function getRuta($codInstitucion) {
        $arrayRuta = Institucion_Query::getArrayRuta($codInstitucion);
        $ruta = 'archivos/' . $arrayRuta['pais'] . '/' . $arrayRuta['consorcio'] . '/' . $arrayRuta['region'] . '/' . $arrayRuta['villa'] . '/' . $arrayRuta['institucion'];
        return $ruta;
    }

    function getArrayDatosTabla1($codigoCliente) {
        return $this->objPro_Query->getArrayDatosTabla1($codigoCliente);
    }

    function getArrayDatosTabla0($codigoCliente) {
        return $this->objPro_Query->getArrayDatosTabla0($codigoCliente);
    }

    function getArrayDatosInstitucion_1($codigoProforma) {
        return $this->objPro_Query->getArrayDatosInstitucion_1($codigoProforma);
    }

    function getArrayDatosInstitucionTodos($CodigoConsorsio) {
        return $this->objPro_Query->getArrayDatosInstitucionTodos($CodigoConsorsio);
    }

    function getArrayDescuento($codigoCliente) {
        return $this->objPro_Query->getArrayDescuento($codigoCliente);
    }

    function getFoto6($codigoAvaluo) {
        return $this->objPro_Query->getFoto6($codigoAvaluo);
    }

    function insertaCliente($CodigoNuevo, $arrayDatosCliente) {
        $this->objPro_Query->insertCliente($CodigoNuevo, $arrayDatosCliente);
    }

    function insertaRelacionConsorcioInstitucion($CodigoConsorcio, $CodigoNuevo) {
        $this->objPro_Query->insertaRelacionConsorcioInstitucion($CodigoConsorcio, $CodigoNuevo);
    }

    function modificaCliente($codigoCliente, $arrayDatosCliente) {
        foreach ($arrayDatosCliente as $key => $value) {
            $NombreCliente = $arrayDatosCliente['NombreCliente'];
            $Empresa = $arrayDatosCliente['Empresa'];
            $NumeroTva = $arrayDatosCliente['NumeroTva'];
            $Telefono = $arrayDatosCliente['Telefono'];
            $Telefono2 = $arrayDatosCliente['Telefono2'];
            $Telefono3 = $arrayDatosCliente['Telefono3'];
            $Email = $arrayDatosCliente['Email'];
            $Email2 = $arrayDatosCliente['Email2'];
            $Email3 = $arrayDatosCliente['Email3'];
            $Email4 = $arrayDatosCliente['Email4'];
            $Pais = $arrayDatosCliente['Pais'];
            $Provincia = $arrayDatosCliente['Provincia'];
            $Direccion = $arrayDatosCliente['Direccion'];
            $CodigoPostal = $arrayDatosCliente['CodigoPostal'];
            $Estado = $arrayDatosCliente['Estado'];
        }
        $this->objPro_Query->modificaCliente($codigoCliente, $NombreCliente, $Empresa, $NumeroTva, $Telefono, $Telefono2, $Telefono3, $Email, $Email2, $Email3, $Email4, $Pais, $Provincia, $Direccion, $CodigoPostal, $Estado);
    }

    function getCodigoCliente() {
        return $this->objPro_Query->getCodigoCliente();
    }

    function getArrayDatosTabla1Realizados() {
        return $this->objPro_Query->getArrayDatosTabla1Realizados();
    }

function getTipo($codigo_avaluo) {
        return $this->objPro_Query->getTipo($codigo_avaluo);
    }

    function getCodigoClientePorEmail($EmailCliente) {
        return $this->objPro_Query->getCodigoClientePorEmail($EmailCliente);
    }

    function getArrayDatosClienteTodos() {
        return $this->objPro_Query->getArrayDatosClienteTodos();
    }

    function eliminaCliente($CodigoCliente) {
        $this->objPro_Query->eliminaCliente($CodigoCliente);
    }

    function getArrayDatosCliente($codigoCliente) {
        return $this->objPro_Query->getArrayDatosCliente($codigoCliente);
    }

    function getArrayDatosCliente_1($codigoProforma) {
        return $this->objPro_Query->getArrayDatosCliente_1($codigoProforma);
    }

}