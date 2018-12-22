<?php

class Tabla2_Query
{

    function getArrayDatosTabla2($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_2 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
        $arrayEmpresa['Valor_Comercial'] = $filaEmpresa['Valor_Comercial'];
        $arrayEmpresa['Valor_Comercial_Bs'] = $filaEmpresa['Valor_Comercial_Bs'];
        $arrayEmpresa['Valor_Hipotecario'] = $filaEmpresa['Valor_Hipotecario'];
        $arrayEmpresa['Valor_Hipotecario_Bs'] = $filaEmpresa['Valor_Hipotecario_Bs'];
        $arrayEmpresa['Valor_Catastral'] = $filaEmpresa['Valor_Catastral'];
        $arrayEmpresa['Valor_Catastral_Bs'] = $filaEmpresa['Valor_Catastral_Bs'];
        $arrayEmpresa['Valor_Liquidacion'] = $filaEmpresa['Valor_Liquidacion'];
        $arrayEmpresa['Valor_Liquidacion_Bs'] = $filaEmpresa['Valor_Liquidacion_Bs'];

        return $arrayEmpresa;
    }

}