<?php
include_once 'RepositorioAdministrador.inc.php';
include_once 'ValidadorPv.inc.php';
class ValidadorProveedor extends ValidadorPv{
    
    public function __construct($nombre, $direccion, $telefono, $email, $conexion){
        $this -> aviso_inicio = "<div class='alert alert-danger' rele='alert'>";
        $this -> aviso_cierre = "</div>";
        $this -> nombre = "";
        $this -> direccion = "";
        $this -> telefono = "";
        $this -> email = "";
        $this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
        $this -> error_direccion = $this -> validar_direccion($conexion, $direccion);
        $this -> error_telefono = $this -> validar_telefono($conexion, $telefono);
        $this -> error_email = $this -> validar_email($conexion, $email);
    }
   
}


