<?php

require 'common/lib/config.php';
require 'common/lib/Base_Datos.php';
require 'common/lib/Conexion.php';
require 'login/lib/Verificar.php';

$objConexion = new Conexion;
$objConexion->conectarse_Admin();
$user = $_POST['usuario'];
$pass = $_POST['password'];

$objVerificar = new Verificar;
if ($objVerificar->verificarUsuario($user, $pass)) {
    session_start();
    $_SESSION['Nombre_Administrador'] = $user;
    $objVerificar->redirect();
}
else
    die('Error 401: No se puedfe tener acceso a la pagina');
