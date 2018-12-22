<?php

class Tabla117_Query
{

    function getArrayDatosTabla117($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_11_7_bs WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Valor_Comercial'] = $filaEmpresa['Valor_Comercial'];
        $arrayEmpresa['Valor_Hipotecario'] = $filaEmpresa['Valor_Hipotecario'];
        $arrayEmpresa['Valor_Catastral'] = $filaEmpresa['Valor_Catastral'];
        $arrayEmpresa['Valor_Liquidacion'] = $filaEmpresa['Valor_Liquidacion'];

        return $arrayEmpresa;
    }
	
	

}