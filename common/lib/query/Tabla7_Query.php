<?php

class Tabla7_Query
{

    function getArrayDatosTabla7($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_7 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Superficie_Lote'] = $filaEmpresa['Superficie_Lote'];
        $arrayEmpresa['Valor_Impositivo_Mt2'] = $filaEmpresa['Valor_Impositivo_Mt2'];
        $arrayEmpresa['Factor_Inclinacion'] = $filaEmpresa['Factor_Inclinacion'];
        $arrayEmpresa['Factor_Forma'] = $filaEmpresa['Factor_Forma'];
        $arrayEmpresa['Factor_Servicios'] = $filaEmpresa['Factor_Servicios'];
        $arrayEmpresa['Valor_Impositivo_Mt2_Total'] = $filaEmpresa['Valor_Impositivo_Mt2_Total'];
        $arrayEmpresa['Valor_Catastral_Total'] = $filaEmpresa['Valor_Catastral_Total'];

        return $arrayEmpresa;
    }

}