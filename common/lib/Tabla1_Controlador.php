<?php

require 'query/Tabla1_Query.php';

class Tabla1__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Cliente_Query;
    }

   
    function getArrayDatosTabla1($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla1($codigoAvaluo);
    }
}