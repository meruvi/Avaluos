<?php

require 'query/Tabla18_Query.php';

class Tabla18__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla18_Query;
    }

   
    function getArrayDatosTabla18($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla18($codigoAvaluo);
    }
	
	
}