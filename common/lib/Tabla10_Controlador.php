<?php

require 'query/Tabla10_Query.php';

class Tabla10__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla10_Query;
    }

   
    function getArrayDatosTabla10($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla10($codigoAvaluo);
    }
}