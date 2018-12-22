<?php

class Tabla11_Query
{

    function getArrayDatosTabla11($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_11 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Unitario_T'] = $filaEmpresa['Valor_Unitario_T'];
        $arrayEmpresa['Superficie_T'] = $filaEmpresa['Superficie_T'];
        $arrayEmpresa['Total_T'] = $filaEmpresa['Total_T'];
        $arrayEmpresa['Valor_Unitario_C'] = $filaEmpresa['Valor_Unitario_C'];
        $arrayEmpresa['Superficie_C'] = $filaEmpresa['Superficie_C'];
        $arrayEmpresa['Total_C'] = $filaEmpresa['Total_C'];
        $arrayEmpresa['Valor_Comercial_Total'] = $filaEmpresa['Valor_Comercial_Total'];

        return $arrayEmpresa;
    }

}