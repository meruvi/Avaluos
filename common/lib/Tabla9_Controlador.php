<?php

require 'query/Tabla9_Query.php';

class Tabla9__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla9_Query;
    }

   
    function getArrayDatosTabla9($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla9($codigoAvaluo);
    }
}