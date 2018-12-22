<?php

require 'query/Tabla3_Query.php';

class Tabla3__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla3_Query;
    }

   
    function getArrayDatosTabla3($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla3($codigoAvaluo);
    }
}