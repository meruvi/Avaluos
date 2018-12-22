<?php

require 'query/Tabla119_Query.php';

class Tabla119__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla119_Query;
    }

   
    function getArrayDatosTabla119($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla119($codigoAvaluo);
    }
}