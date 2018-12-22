<?php

class Tabla6_Query
{

    function getArrayDatosTabla6($codigoAvaluo)
    {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_6 WHERE Codigo_Avaluo='" . $codigoAvaluo . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa = array();
        $arrayEmpresa['Id'] = $filaEmpresa['Id'];
		$arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
		if($filaEmpresa['Residencial']=="fa" or $filaEmpresa['Residencial']=="")
		{
        $arrayEmpresa['Residencial'] = "No";
		}
		else
		{
		$arrayEmpresa['Residencial'] = "Si";	
		}
		if($filaEmpresa['Oficina']=="fa" or $filaEmpresa['Oficina']=="")
		{
        $arrayEmpresa['Oficina'] = "No";
		}
		else
		{
		$arrayEmpresa['Oficina'] = "Si";	
		}
		if($filaEmpresa['Comercial']=="fa" or $filaEmpresa['Comercial']=="")
		{
        $arrayEmpresa['Comercial'] = "No";
		}
		else
		{
		$arrayEmpresa['Comercial'] = "Si";	
		}
        $arrayEmpresa['Otros_Uso'] = $filaEmpresa['Otros_Uso'];
		if($filaEmpresa['Propietarios']=="fa" or $filaEmpresa['Propietarios']=="")
		{
        $arrayEmpresa['Propietarios'] = "No";
		}
		else
		{
		$arrayEmpresa['Propietarios'] = "Si";	
		}
		if($filaEmpresa['Inquilinos']=="fa" or $filaEmpresa['Inquilinos']=="")
		{
        $arrayEmpresa['Inquilinos'] = "No";
		}
		else
		{
        $arrayEmpresa['Inquilinos'] = "Si";
		}
		$arrayEmpresa['Otros_Ocupacion'] = $filaEmpresa['Otros_Ocupacion'];
        if($filaEmpresa['Lujo']=="fa" or $filaEmpresa['Lujo']=="")
		{
		$arrayEmpresa['Lujo'] = "No";
		}
		else
		{
		$arrayEmpresa['Lujo'] ="Si";	
		}
		if($filaEmpresa['Semilujo']=="fa" or $filaEmpresa['Semilujo']=="")
		{
		$arrayEmpresa['Semilujo'] = "No";
		}
		else
		{
		$arrayEmpresa['Semilujo'] = "Si";	
		}
		if($filaEmpresa['Standart']=="fa" or $filaEmpresa['Standart']=="")
		{
		$arrayEmpresa['Standart'] = "No";
		}
		else
		{
		$arrayEmpresa['Standart'] = "Si";	
		}
		if($filaEmpresa['Economico']=="fa" or $filaEmpresa['Economico']=="")
		{
        $arrayEmpresa['Economico'] = "No";
		}
		else
		{
		$arrayEmpresa['Economico'] = "Si";	
		}
		if($filaEmpresa['Bueno']=="fa" or $filaEmpresa['Bueno']=="")
		{
        $arrayEmpresa['Bueno'] = "No";
		}
		else
		{
		$arrayEmpresa['Bueno'] = "Si";	
		}
		if($filaEmpresa['Regular']=="fa" or $filaEmpresa['Regular']=="")
		{
        $arrayEmpresa['Regular'] = "No";
		}
		else
		{
		$arrayEmpresa['Regular'] = "Si";	
		}
		if($filaEmpresa['Malo']=="fa" or $filaEmpresa['Malo']=="")
		{
        $arrayEmpresa['Malo'] = "No";
		}
		else
		{
		$arrayEmpresa['Malo'] = "Si";	
		}
		if($filaEmpresa['Muy_Malo']=="fa" or $filaEmpresa['Muy_Malo']=="")
		{
        $arrayEmpresa['Muy_Malo'] = "No";	
		}
		else
		{
		$arrayEmpresa['Muy_Malo'] = "Si";		
		}
		
        $arrayEmpresa['Antiguedad'] = $filaEmpresa['Antiguedad'];
		$arrayEmpresa['Descripcion'] = $filaEmpresa['Descripcion'];
		$arrayEmpresa['Numero_Ambientes'] = $filaEmpresa['Numero_Ambientes'];
		$arrayEmpresa['Numero_Bloques'] = $filaEmpresa['Numero_Bloques'];

        return $arrayEmpresa;
    }

}