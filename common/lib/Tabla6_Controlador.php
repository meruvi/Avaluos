<?php

require 'query/Tabla6_Query.php';

class Tabla6__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla6_Query;
    }

   
    function getArrayDatosTabla6($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla6($codigoAvaluo);
    }
}