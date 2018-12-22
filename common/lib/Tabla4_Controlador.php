<?php

require 'query/Tabla4_Query.php';

class Tabla4__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla4_Query;
    }

   
    function getArrayDatosTabla4($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla4($codigoAvaluo);
    }
}