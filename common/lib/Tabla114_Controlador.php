<?php

require 'query/Tabla114_Query.php';

class Tabla114__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla114_Query;
    }

   
    function getArrayDatosTabla114($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla114($codigoAvaluo);
    }
}