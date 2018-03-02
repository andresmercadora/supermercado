<?php

include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php'; 
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/Redireccion.inc.php';
if (isset($_POST['borrar_proveedor'])) {
    $id_proveedor = $_POST['id_borrar'];
    Conexion::abrir_conexion();
        RepositorioAdministrador::eliminar_proveedor(Conexion::obtener_conexion(), $id_proveedor);
        Redireccion::redirigir(RUTA_GESTOR);
    Conexion::cerrar_conexion();
}
