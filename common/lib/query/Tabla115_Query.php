<?php

class Tabla115_Query
{

    function getArrayDatosTabla115($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM 11_5 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Conclusion'] = $filaEmpresa['Conclusion'];
		$arrayEmpresa['Conclusion2'] = $filaEmpresa['Conclusion2'];
		$arrayEmpresa['Conclusion3'] = $filaEmpresa['Conclusion3'];
		$arrayEmpresa['Conclusion4'] = $filaEmpresa['Conclusion4'];
		$arrayEmpresa['Conclusion5'] = $filaEmpresa['Conclusion5'];
		$arrayEmpresa['Conclusion6'] = $filaEmpresa['Conclusion6'];

        return $arrayEmpresa;
    }

}