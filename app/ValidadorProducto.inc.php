<?php
include_once 'RepositorioAdministrador.inc.php';
include_once 'Validador.inc.php';
class ValidadorProducto extends Validador{

    public function __construct($nombre_producto, $cantidad_producto,  $precio_unidad, $descripcion, $marca, $conexion){
        $this -> aviso_inicio = "<div class='alert alert-danger' rele='alert'>";
        $this -> aviso_cierre = "</div>";
        $this -> nombre_producto = "";
        $this -> cantidad_producto = "";
        $this -> precio_unidad = "";
        $this -> descripcion = "";
        $this -> marca = "";
        $this -> error_nombre_producto = $this -> validar_nombre_producto($conexion, $nombre_producto);
        $this -> error_cantidad_producto = $this -> validar_cantidad_producto($conexion, $cantidad_producto);
        $this -> error_precio_unidad = $this -> validar_precio_unidad($conexion, $precio_unidad);
        $this -> error_descripcion = $this -> validar_descripcion($conexion, $descripcion);
        $this -> error_marca = $this -> validar_marca($conexion, $marca);
    }
}

