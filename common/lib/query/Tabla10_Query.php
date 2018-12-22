<?php

class Tabla10_Query
{

    function getArrayDatosTabla10($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_10 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Superficie_Construida'] = $filaEmpresa['Superficie_Construida'];
        $arrayEmpresa['Valor_Comercial_Mt2_Construido'] = $filaEmpresa['Valor_Comercial_Mt2_Construido'];
        $arrayEmpresa['Factor_Depreciacion'] = $filaEmpresa['Factor_Depreciacion'];
        $arrayEmpresa['Valor_Total_Construccion_Mt2'] = $filaEmpresa['Valor_Total_Construccion_Mt2'];
        $arrayEmpresa['Valor_Total_Construccion'] = $filaEmpresa['Valor_Total_Construccion'];

        return $arrayEmpresa;
    }

}