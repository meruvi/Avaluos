<?php

class Tabla1_Query
{

    function getArrayDatosTabla1($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_1 WHERE Codigo_Avaluo'=" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
        $arrayEmpresa['Solicitante'] = $filaEmpresa['Solicitante'];
        $arrayEmpresa['Propietario'] = $filaEmpresa['Propietario'];
        $arrayEmpresa['Ciudad'] = $filaEmpresa['Ciudad'];
        $arrayEmpresa['Zona'] = $filaEmpresa['Zona'];
        $arrayEmpresa['Urbanizacion'] = $filaEmpresa['Urbanizacion'];
        $arrayEmpresa['Direccion'] = $filaEmpresa['Direccion'];
        $arrayEmpresa['Manzana'] = $filaEmpresa['Manzana'];
        $arrayEmpresa['Lote'] = $filaEmpresa['Lote'];
        $arrayEmpresa['Testimonio'] = $filaEmpresa['Testimonio'];
        $arrayEmpresa['Folio_Real'] = $filaEmpresa['Folio_Real'];
        $arrayEmpresa['Codigo_Catastral'] = $filaEmpresa['Codigo_Catastral'];
        $arrayEmpresa['Ultimo_Impuesto'] = $filaEmpresa['Ultimo_Impuesto'];
        $arrayEmpresa['Observaciones'] = $filaEmpresa['Observaciones'];

        return $arrayEmpresa;
    }

}