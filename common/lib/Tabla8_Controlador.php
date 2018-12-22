<?php

require 'query/Tabla8_Query.php';

class Tabla8__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla8_Query;
    }

   
    function getArrayDatosTabla8($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla8($codigoAvaluo);
    }
}