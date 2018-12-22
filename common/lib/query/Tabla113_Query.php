<?php

class Tabla113_Query
{

    function getArrayDatosTabla113($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM 11_3 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Unitario_T'] = $filaEmpresa['Valor_Unitario_T'];
        $arrayEmpresa['Superficie_T'] = $filaEmpresa['Superficie_T'];
        $arrayEmpresa['Total_T'] = $filaEmpresa['Total_T'];
        $arrayEmpresa['Valor_Unitario_C'] = $filaEmpresa['Valor_Unitario_C'];
        $arrayEmpresa['Superficie_C'] = $filaEmpresa['Superficie_C'];
        $arrayEmpresa['Total_C'] = $filaEmpresa['Total_C'];
        $arrayEmpresa['Valor_Catastral_Total'] = $filaEmpresa['Valor_Catastral_Total'];
		$arrayEmpresa['Valor_Catastral_Total_Bs'] = $filaEmpresa['Valor_Catastral_Total_Bs'];

        return $arrayEmpresa;
    }

}