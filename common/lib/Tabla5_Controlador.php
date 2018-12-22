<?php

require 'query/Tabla5_Query.php';

class Tabla5__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla5_Query;
    }

   
    function getArrayDatosTabla5($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla5($codigoAvaluo);
    }
}