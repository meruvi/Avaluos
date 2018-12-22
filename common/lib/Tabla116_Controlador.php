<?php

require 'query/Tabla116_Query.php';

class Tabla116__Controlador {

    var $objPro_Query;

    function __construct() {
        $this->objPro_Query = new Tabla116_Query;
    }

   
    function getArrayDatosTabla116($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla116($codigoAvaluo);
    }
	
	function getArrayDatosTabla117($codigoAvaluo) {
        return $this->objPro_Query->getArrayDatosTabla117($codigoAvaluo);
    }
	
}