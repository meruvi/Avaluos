<?php

class Tabla119_Query {

    function getArrayDatosTabla119($codigoAvaluo) {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_19 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Carta'] = $filaEmpresa['Carta'];
        $arrayEmpresa['Empresa'] = $filaEmpresa['Empresa'];
        $arrayEmpresa['Nombre'] = $filaEmpresa['Nombre'];
        $arrayEmpresa['Titulo'] = $filaEmpresa['Titulo'];

        return $arrayEmpresa;
    }

}