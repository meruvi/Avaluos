<?php

class Conexion
{

    var $objBaseDatos;

    function conectarse_Admin()
    {
        $this->objBaseDatos = new BD_Admin;
        $this->objBaseDatos->Conectarse();
    }

    function desconectarse_Admin()
    {
        $this->objBaseDatos->Cerrar();
    }

}