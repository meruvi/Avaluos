<?php

require 'query/Tabla7_Query.php';

class Tabla7__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla7_Query;
    }

   
    function getArrayDatosTabla7($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla7($codigoAvaluo);
    }
}