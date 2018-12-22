<?php

require 'query/Tabla2_Query.php';

class Tabla2__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla2_Query;
    }

   
    function getArrayDatosTabla2($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla2($codigoAvaluo);
    }
}