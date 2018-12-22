<?php

class Tabla18_Query
{

    function getArrayDatosTabla18($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_18 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Foto'] = $filaEmpresa['Foto'];

        return $arrayEmpresa;
    }
	
	

}