<?php

class Tabla9_Query
{

    function getArrayDatosTabla9($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_9 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Superficie_Terreno'] = $filaEmpresa['Superficie_Terreno'];
        $arrayEmpresa['Valor_Comercial_Mt2'] = $filaEmpresa['Valor_Comercial_Mt2'];
        $arrayEmpresa['Factor_Inclinacion'] = $filaEmpresa['Factor_Inclinacion'];
        $arrayEmpresa['Factor_Forma'] = $filaEmpresa['Factor_Forma'];
        $arrayEmpresa['Factor_Servicios'] = $filaEmpresa['Factor_Servicios'];
        $arrayEmpresa['Factor_Comerciabilidad'] = $filaEmpresa['Factor_Comerciabilidad'];
        $arrayEmpresa['Valor_Comercial_Mt2_Total'] = $filaEmpresa['Valor_Comercial_Mt2_Total'];
		$arrayEmpresa['Valor_Total_Comercial_Terreno'] = $filaEmpresa['Valor_Total_Comercial_Terreno'];

        return $arrayEmpresa;
    }

}