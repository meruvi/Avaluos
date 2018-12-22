<?php

class Tabla0_Query
{

    function getArrayDatosTabla0($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_1 WHERE Codigo_Avaluo'" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
        $arrayEmpresa['Tipo_Inmueble'] = $filaEmpresa['Tipo_Inmueble'];
        $arrayEmpresa['Superficie_Lote'] = $filaEmpresa['Superficie_Lote'];
        $arrayEmpresa['Superficie_Construida'] = $filaEmpresa['Superficie_Construida'];
        $arrayEmpresa['Valor_Impositivo_Mt2'] = $filaEmpresa['Valor_Impositivo_Mt2'];
        $arrayEmpresa['Valor_Comercial_Mt2'] = $filaEmpresa['Valor_Comercial_Mt2'];
        $arrayEmpresa['Valor_Comercial_Mt2_Construido'] = $filaEmpresa['Valor_Comercial_Mt2_Construido'];
        $arrayEmpresa['Valor_Catastral_Mt2_Construido'] = $filaEmpresa['Valor_Catastral_Mt2_Construido'];
        $arrayEmpresa['Anos_Vida'] = $filaEmpresa['Anos_Vida'];
        $arrayEmpresa['Factor_Inclinacion'] = $filaEmpresa['Factor_Inclinacion'];
        $arrayEmpresa['Factor_Forma'] = $filaEmpresa['Factor_Forma'];
        $arrayEmpresa['Factor_Comerciabilidad'] = $filaEmpresa['Factor_Comerciabilidad'];
        $arrayEmpresa['Foto1'] = $filaEmpresa['Foto1'];
        $arrayEmpresa['Foto2'] = $filaEmpresa['Foto2'];
        $arrayEmpresa['Foto3'] = $filaEmpresa['Foto3'];
        $arrayEmpresa['Foto4'] = $filaEmpresa['Foto4'];
        $arrayEmpresa['Foto5'] = $filaEmpresa['Foto5'];
        $arrayEmpresa['Fecha'] = $filaEmpresa['Fecha'];
		$arrayEmpresa['Tipo_Cambio'] = $filaEmpresa['Tipo_Cambio'];

        return $arrayEmpresa;
    }

}