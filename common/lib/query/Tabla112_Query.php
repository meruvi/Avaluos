<?php

class Tabla112_Query
{

    function getArrayDatosTabla112($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM 11_2 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Comercial_T'] = $filaEmpresa['Valor_Comercial_T'];
        $arrayEmpresa['Valor_Comercial_C'] = $filaEmpresa['Valor_Comercial_C'];
        $arrayEmpresa['Porcentaje_T'] = $filaEmpresa['Porcentaje_T'];
        $arrayEmpresa['Porcentaje_C'] = $filaEmpresa['Porcentaje_C'];
        $arrayEmpresa['Total_T'] = $filaEmpresa['Total_T'];
        $arrayEmpresa['Total_C'] = $filaEmpresa['Total_C'];
        $arrayEmpresa['Valor_Hipotecario'] = $filaEmpresa['Valor_Hipotecario'];

        return $arrayEmpresa;
    }

}