<?php

class Tabla5_Query
{

    function getArrayDatosTabla5($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_5 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
		$arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
        $arrayEmpresa['Agua_Zona'] = $filaEmpresa['Agua_Zona'];
        $arrayEmpresa['Agua_Inmueble'] = $filaEmpresa['Agua_Inmueble'];
        $arrayEmpresa['Energia_Zona'] = $filaEmpresa['Energia_Zona'];
        $arrayEmpresa['Energia_Inmueble'] = $filaEmpresa['Energia_Inmueble'];
        $arrayEmpresa['Telefono_Zona'] = $filaEmpresa['Telefono_Zona'];
        $arrayEmpresa['Telefono_Inmueble'] = $filaEmpresa['Telefono_Inmueble'];
        $arrayEmpresa['Alcantarillado_Zona'] = $filaEmpresa['Alcantarillado_Zona'];
        $arrayEmpresa['Alcantarillado_Inmueble'] = $filaEmpresa['Alcantarillado_Inmueble'];
		$arrayEmpresa['Gas_Zona'] = $filaEmpresa['Gas_Zona'];
		$arrayEmpresa['Gas_Inmueble'] = $filaEmpresa['Gas_Inmueble'];
		$arrayEmpresa['Internet'] = $filaEmpresa['Internet'];
        $arrayEmpresa['Internet_Inmueble'] = $filaEmpresa['Internet_Inmueble'];
		$arrayEmpresa['Cable'] = $filaEmpresa['Cable'];
		$arrayEmpresa['Cable_Inmueble'] = $filaEmpresa['Cable_Inmueble'];
		$arrayEmpresa['Observaciones'] = $filaEmpresa['Observaciones'];

        return $arrayEmpresa;
    }

}