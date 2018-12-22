<?php

class Tabla3_Query
{

    function getArrayDatosTabla3($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_3 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
        $arrayEmpresa['Uso_Suelo'] = $filaEmpresa['Uso_Suelo'];
        $arrayEmpresa['Ancho_Via'] = $filaEmpresa['Ancho_Via'];
        $arrayEmpresa['Material_Via'] = $filaEmpresa['Material_Via'];
        $arrayEmpresa['Tipo_Via'] = $filaEmpresa['Tipo_Via'];
        $arrayEmpresa['Aceras'] = $filaEmpresa['Aceras'];
        $arrayEmpresa['Transporte'] = $filaEmpresa['Transporte'];
        $arrayEmpresa['Densidad_Poblacion'] = $filaEmpresa['Densidad_Poblacion'];
        $arrayEmpresa['Descripcion'] = $filaEmpresa['Descripcion'];

        return $arrayEmpresa;
    }

}