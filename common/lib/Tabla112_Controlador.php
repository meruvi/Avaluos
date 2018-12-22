<?php

require 'query/Tabla112_Query.php';

class Tabla112__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla112_Query;
    }

   
    function getArrayDatosTabla112($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla112($codigoAvaluo);
    }
}