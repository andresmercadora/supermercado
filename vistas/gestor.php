<?php 
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/panel_control_declaracion.inc.php';

switch ($gestor_actual){
    case '':
        include_once 'plantillas/gestor-generico.inc.php';
        break;
    case 'gestorpv':
        $array_proveedor = RepositorioAdministrador::obtener_proveedor(Conexion::obtener_conexion(), $_SESSION['cedula']);
        include_once 'plantillas/gestor-genericopv.inc.php';
        break;
    case '1':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],1);
        include_once 'plantillas/gestor_1.inc.php';
        break;
    case '2':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],2);
        include_once 'plantillas/gestor_2.inc.php';
        break;
    case '3':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],3);
        include_once 'plantillas/gestor_3.inc.php';
        break;
    case '4':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],4);
        include_once 'plantillas/gestor_4.inc.php';
        break;
    case '5':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],5);
        include_once 'plantillas/gestor_5.inc.php';
        break;
    case '6':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],6);
        include_once 'plantillas/gestor_6.inc.php';
        break;
    case '7':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],7);
        include_once 'plantillas/gestor_7.inc.php';
        break;
    case '8':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],8);
        include_once 'plantillas/gestor_8.inc.php';
        break;
    case '9':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],9);
        include_once 'plantillas/gestor_9.inc.php';
        break;
    case '10':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],10);
        include_once 'plantillas/gestor_10.inc.php';
        break;
    case '11':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],11);
        include_once 'plantillas/gestor_11.inc.php';
        break;
    case '12':
        $array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), $_SESSION['cedula'],12);
        include_once 'plantillas/gestor_12.inc.php';
        break;
}

include_once 'plantillas/panel_control_cierre.inc.php';
