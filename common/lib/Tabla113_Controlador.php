<?php

require 'query/Tabla113_Query.php';

class Tabla113__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla113_Query;
    }

   
    function getArrayDatosTabla113($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla113($codigoAvaluo);
    }
}