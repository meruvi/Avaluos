<?php

class Tabla4_Query
{

    function getArrayDatosTabla4($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_4 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
		$arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
        $arrayEmpresa['Acceso_Via'] = $filaEmpresa['Acceso_Via'];
        $arrayEmpresa['Superficie_Terreno'] = $filaEmpresa['Superficie_Terreno'];
        $arrayEmpresa['Frente'] = $filaEmpresa['Frente'];
        $arrayEmpresa['Fondo'] = $filaEmpresa['Fondo'];
        $arrayEmpresa['Superficie_Construida'] = $filaEmpresa['Superficie_Construida'];
        $arrayEmpresa['Forma'] = $filaEmpresa['Forma'];
        $arrayEmpresa['Topografia'] = $filaEmpresa['Topografia'];
		$arrayEmpresa['Resistencia_Suelo'] = $filaEmpresa['Resistencia_Suelo'];
        $arrayEmpresa['COLINDANCIA_NORTE'] = $filaEmpresa['COLINDANCIA_NORTE'];
		$arrayEmpresa['COLINDANCIA_SUR'] = $filaEmpresa['COLINDANCIA_SUR'];
		$arrayEmpresa['COLINDANCIA_ESTE'] = $filaEmpresa['COLINDANCIA_ESTE'];
		$arrayEmpresa['COLINDANCIA_OESTE'] = $filaEmpresa['COLINDANCIA_OESTE'];

        return $arrayEmpresa;
    }

}