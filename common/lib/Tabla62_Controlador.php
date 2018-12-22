<?php

require 'query/Tabla62_Query.php';

class Tabla62__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla62_Query;
    }

   
    function getArrayDatosTabla62($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla62($codigoAvaluo);
    }
}