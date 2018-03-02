<?php

include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php'; 
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/Redireccion.inc.php';
if (isset($_POST['borrar_productos'])) {
    $id_productos = $_POST['id_borrar'];
    $tp_productos = $_POST['tp_borrar'];
    Conexion::abrir_conexion();
        RepositorioAdministrador::eliminar_productos(Conexion::obtener_conexion(), $id_productos);
        Redireccion::redirigir(RUTA_GESTOR."/".$tp_productos);
    Conexion::cerrar_conexion();
}
