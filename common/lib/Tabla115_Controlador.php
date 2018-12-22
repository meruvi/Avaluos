<?php

require 'query/Tabla115_Query.php';

class Tabla115__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla115_Query;
    }

   
    function getArrayDatosTabla115($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla115($codigoAvaluo);
    }
}