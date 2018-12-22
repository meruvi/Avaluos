<?php

class Cliente_Query {

    function insertCliente($CodigoNuevo, $array) {

        mysql_query("INSERT INTO tabla_1 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '" . addslashes($array['SOLICITANTE']) . "', '" . addslashes($array['PROPIETARIO']) . "', '" . addslashes($array['JURISDICCION']) . "', '', '" . addslashes($array['URBANIZACION']) . "', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_0 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '" . addslashes($array['INMUEBLEAVALUO']) . "', '', '', '', '', '', '', '', '', '', '', '" . addslashes($array['SubirFoto']) . "', '" . addslashes($array['SubirFoto2']) . "', '" . addslashes($array['SubirFoto3']) . "', '" . addslashes($array['SubirFoto4']) . "', '" . addslashes($array['SubirFoto5']) . "', '" . addslashes($array['SubirFoto7']) . "', '', '','" . addslashes($array['SubirFoto8']) . "','" . addslashes($array['SubirFoto9']) . "','" . addslashes($array['SubirFoto10']) . "','" . addslashes($array['SubirFoto11']) . "','" . addslashes($array['SubirFoto12']) . "','" . addslashes($array['SubirFoto13']) . "');");

        mysql_query("INSERT INTO tabla_2 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '');");


        mysql_query("INSERT INTO tabla_3 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_4 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_5 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_6 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_6_2 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_7 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_8 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_9 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_10 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_11 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_11_4 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO tabla_11_7_bs VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '');");

        mysql_query("INSERT INTO 11_2 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO 11_3 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '', '', '');");

        mysql_query("INSERT INTO 11_5 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '', '', '');");

        mysql_query("INSERT INTO 11_6 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '');");

        mysql_query("INSERT INTO tabla_18 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '" . addslashes($array['SubirFoto6']) . "');");

        mysql_query("INSERT INTO tabla_19 VALUES (NULL , '" . addslashes($CodigoNuevo) . "', '', '', '', '');");
    }

    function getArrayDatosTabla1($codigoCliente) {
        $arrayEmpresa = array();
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_1 WHERE Codigo_Avaluo = '" . $codigoCliente . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

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

    function getArrayDatosTabla0($codigoCliente) {
        $arrayEmpresa = array();
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_0 WHERE Codigo_Avaluo = '" . $codigoCliente . "';");
        $filaEmpresa = mysql_fetch_array($consultaEmpresa);

        $arrayEmpresa['Codigo_Avaluo'] = $filaEmpresa['Codigo_Avaluo'];
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
        $arrayEmpresa['Foto7'] = $filaEmpresa['Foto7'];
        $arrayEmpresa['Fecha'] = $filaEmpresa['Fecha'];
        $arrayEmpresa['Tipo_Cambio'] = $filaEmpresa['Tipo_Cambio'];
        $arrayEmpresa['Foto8'] = $filaEmpresa['Foto8'];
        $arrayEmpresa['Foto9'] = $filaEmpresa['Foto9'];
        $arrayEmpresa['Foto10'] = $filaEmpresa['Foto10'];
        $arrayEmpresa['Foto11'] = $filaEmpresa['Foto11'];
        $arrayEmpresa['Foto12'] = $filaEmpresa['Foto12'];
        $arrayEmpresa['Foto13'] = $filaEmpresa['Foto63'];

        return $arrayEmpresa;
    }

    function getArrayDatosTabla1Realizados() {
        $arrayRegistro = array();
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_1 ORDER BY Id DESC");
        while ($filaEmpresa = mysql_fetch_array($consultaEmpresa)) {
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
            $arrayRegistro[] = $arrayEmpresa;
        }
        return $arrayRegistro;
    }


 function getTipo($codigo_avaluo) {
        $consultaEmpresa = mysql_query("SELECT * FROM tabla_0 WHERE Codigo_Avaluo='".$codigo_avaluo."'");
        while ($filaEmpresa = mysql_fetch_array($consultaEmpresa)) {

            $Tipo_Inmueble = $filaEmpresa['Tipo_Inmueble'];
        }
        return $Tipo_Inmueble;
    }











    function getCodigoCliente() {
        $result = mysql_query("SELECT Codigo_Avaluo FROM tabla_0 ORDER BY Id DESC");
        $row = mysql_fetch_array($result);

        if (mysql_num_rows($result) == 0) {
            $codigo = 'AVA-00001';
            return $codigo;
        }

        $cadenas = explode("-", $row['Codigo_Avaluo']);
        $letra = $cadenas[0];
        $numero = $cadenas[1];
        $nuevoNumero = (int) $numero;
        $nuevoNumero = $nuevoNumero + 1;
        $cadenacero = '';
        if ($nuevoNumero >= 0 && $nuevoNumero <= 9) {
            $cadenacero = '0000';
        } else {
            if ($nuevoNumero >= 10 && $nuevoNumero <= 99) {
                $cadenacero = '000';
            } else {
                if ($nuevoNumero >= 100 && $nuevoNumero <= 999) {
                    $cadenacero = '00';
                } else {
                    if ($nuevoNumero >= 1000 && $nuevoNumero <= 9999) {
                        $cadenacero = '0';
                    } else {
                        if ($nuevoNumero >= 10000 && $nuevoNumero <= 99999) {
                            $cadenacero = '';
                        }
                    }
                }
            }
        }
        $codigo = $letra . '-' . $cadenacero . $nuevoNumero;
        return $codigo;
    }

}





