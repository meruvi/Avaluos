<?php

require 'query/Tabla0_Query.php';

class Tabla0__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Cliente_Query;
    }

   
    function getArrayDatosTabla0($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla0($codigoAvaluo);
    }
}