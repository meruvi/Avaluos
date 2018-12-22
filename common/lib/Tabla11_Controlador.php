<?php

require 'query/Tabla11_Query.php';

class Tabla11__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla11_Query;
    }

   
    function getArrayDatosTabla11($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla11($codigoAvaluo);
    }
}