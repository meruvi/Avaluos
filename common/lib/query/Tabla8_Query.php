<?php

class Tabla8_Query
{

    function getArrayDatosTabla8($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_8 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Catastral_Mt2_Construido'] = $filaEmpresa['Valor_Catastral_Mt2_Construido'];
        $arrayEmpresa['Factor_Depreciacion'] = $filaEmpresa['Factor_Depreciacion'];
        $arrayEmpresa['Superficie_Construida'] = $filaEmpresa['Superficie_Construida'];
        $arrayEmpresa['Valor_Catastral_Mt2_Total'] = $filaEmpresa['Valor_Catastral_Mt2_Total'];
        $arrayEmpresa['Valor_Catastral_Total'] = $filaEmpresa['Valor_Catastral_Total'];

        return $arrayEmpresa;
    }

}