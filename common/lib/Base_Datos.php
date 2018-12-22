<?php

class BD_Admin
{

    /**
     * @var String
     */
    private $Servidor = '';     // Strind para Servidor
    private $Nombre = '';       // Strind para Nombre de la Base de Datos
    private $Usuario = '';      // Strind para Usuario del Servidor
    private $Password = '';     // Strind para Clave de acceso al servidor
    private $link = '';

    /**
     * @method construct() Inicializa las variables 
     */
    function __construct()
    {
        $this->Servidor = $GLOBALS['database_host'];        // Servidor
        $this->Nombre = $GLOBALS['database_name'];          // Nombre de la Base de Datos
        $this->Usuario = $GLOBALS['database_user'];         // Usuario del Servidor
        $this->Password = '';    // Clave de acceso al servidor
        $this->link = '';
    }

    /**
     * @method public conectarse() Establece la coneccion a la base de datos
     */
    public function Conectarse()
    {
        $this->link = mysql_connect($this->Servidor, $this->Usuario, $this->Password);
        $conectarBD = mysql_select_db($this->Nombre, $this->link);
        if (!$this->link or !$conectarBD) {
            throw new DBException(mysql_error(), mysql_errno()); //Caputara las exepciones
        }
    }

    /**
     * @method public cerrar() Cierra la coneccion de la base de datos
     */
    public function Cerrar()
    {
        mysql_close($this->link);
    }

}