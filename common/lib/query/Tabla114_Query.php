<?php

class Tabla114_Query
{

    function getArrayDatosTabla114($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_11_4 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Comercial_T'] = $filaEmpresa['Valor_Comercial_T'];
        $arrayEmpresa['Porcentaje_T'] = $filaEmpresa['Porcentaje_T'];
        $arrayEmpresa['Total_T'] = $filaEmpresa['Total_T'];
        $arrayEmpresa['Valor_Comercial_C'] = $filaEmpresa['Valor_Comercial_C'];
        $arrayEmpresa['Porcentaje_C'] = $filaEmpresa['Porcentaje_C'];
        $arrayEmpresa['Total_C'] = $filaEmpresa['Total_C'];
        $arrayEmpresa['Valor_Liquidacion_Venta_Rapida'] = $filaEmpresa['Valor_Liquidacion_Venta_Rapida'];

        return $arrayEmpresa;
    }

}