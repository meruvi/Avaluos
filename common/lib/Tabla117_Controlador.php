<?php

require 'query/Tabla117_Query.php';

class Tabla117__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla117_Query;
    }

   
    function getArrayDatosTabla117($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla117($codigoAvaluo);
    }
	
	
}