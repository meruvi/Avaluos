<?php

class Verificar
{

    function verificarUsuario($login, $pass)
    {
        $result = mysql_query("SELECT * FROM adm_avaluos WHERE Usuario = '" . $login . "' AND Clave = '" . $pass . "';");
        if (mysql_num_rows($result) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getDatosUsuario($login, $pass)
    {
        $result = mysql_query("SELECT * FROM adm_avaluos WHERE Usuario = '" . $login . "' AND Clave = '" . $pass . "';");
        $rowUsuario = mysql_fetch_array($result);
        return array($rowUsuario['Nombre'], $rowUsuario['Usuario']);
    }

    function redirect()
    {
        header("Location: index.php");
    }

}

