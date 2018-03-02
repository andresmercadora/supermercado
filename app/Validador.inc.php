<?php

abstract class Validador {
    protected $aviso_inicio;
    protected $aviso_cierre;
    
    protected $nombre_producto;
    protected $cantidad_producto;
    protected $precio_unidad;
    protected $descripcion;
    protected $marca;
    
    protected $error_nombre_producto;
    protected $error_cantidad_producto;
    protected $error_precio_unidad;
    protected $error_descripcion;
    protected $error_marca;
    
    function __construct(){
        
    }
    protected function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    protected function validar_nombre_producto($conexion, $nombre_producto) {
        if (!$this->variable_iniciada($nombre_producto)) {
            return "Debes ingresar el nombre del producto";
        } else if (RepositorioAdministrador::nombre_producto_existe($conexion, $nombre_producto)) {
            return "Ya existe un producto con, por favor intenta con otro.";
        } else {
            $this->nombre_producto = $nombre_producto;
        }
        if (strlen($nombre_producto) > 55) {
            return 'El nombre del producto no puede exceder mas 55 calacteres';
        }
    }

    protected function validar_cantidad_producto($conexion, $cantidad_producto) {
        if (!$this->variable_iniciada($cantidad_producto)) {
            return "Debe ingresar la cantidad del producto.";
        }else if(!is_numeric($cantidad_producto)){
            return 'El valor ingresado debe ser numerico';
        }
        else {
            $this-> cantidad_producto = $cantidad_producto;
        }
    }

    protected function validar_precio_unidad($conexion, $precio_unidad) {
        if (!$this->variable_iniciada($precio_unidad)) {
            return "Debe ingresar el precio del producto.";
        }else if(!is_numeric($precio_unidad)){
            return 'El valor ingresado debe ser numerico';
        }
        else {
            $this-> precio_unidad = $precio_unidad;
        }
    }
    
    protected function validar_descripcion($conexion, $descripcion) {
        if (!$this->variable_iniciada($descripcion)) {
            return "Debes ingresar una descripcion al producto";
        } else if (RepositorioAdministrador::nombre_producto_existe($conexion, $descripcion)) {
            return "Ya existe un producto con es descripcion, por favor intenta con otro.";
        } else {
            $this->descripcion = $descripcion;
        }
        if (strlen($descripcion) > 1000) {
            return 'La descripcion del producto no puede exceder mas 1000 calacteres';
        }
    }
    
    protected function validar_marca($conexion, $marca) {
        if (!$this->variable_iniciada($marca)) {
            return "Debe ingresar la marca del producto.";
        } else {
            $this-> marca= $marca;
        }
    }
    
    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function getCantidad_producto() {
        return $this->cantidad_producto;
    }

    function getPrecio_unidad() {
        return $this->precio_unidad;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getMarca() {
        return $this->marca;
    }

    function setNombre_producto() {
        if ($this->nombre_producto != "" && strlen(trim($this->nombre_producto)) > 0) {
            echo 'value = "' . $this->nombre_producto . '"';
        }
    }

    function setCantidad_producto() {
        if ($this->cantidad_producto != "") {
            echo 'value = "' . $this->cantidad_producto . '"';
        }
    }

    function setPrecio_unidad() {
        if ($this->precio_unidad != "") {
            echo 'value = "' . $this->precio_unidad . '"';
        }
    }

    function setDescripcion() {
        if ($this->descripcion != "" && strlen(trim($this->descripcion)) > 0) {
            echo $this->descripcion ;
        }
    }

    function setMarca() {
        if ($this->marca != "") {
            echo 'value = "' . $this->marca . '"';
        }
    }

    function setError_nombre_producto() {
        if ($this->error_nombre_producto != "") {
            echo $this->aviso_inicio . $this->error_nombre_producto . $this->aviso_cierre;
        }
    }

    function setError_cantidad_producto() {
        if ($this->error_cantidad_producto != "") {
            echo $this->aviso_inicio . $this->error_cantidad_producto . $this->aviso_cierre;
        }
    }

    function setError_precio_unidad() {
        if ($this->error_precio_unidad != "") {
            echo $this->aviso_inicio . $this->error_precio_unidad . $this->aviso_cierre;
        }
    }

    function setError_descripcion() {
        if ($this->error_descripcion != "") {
            echo $this->aviso_inicio . $this->error_descripcion . $this->aviso_cierre;
        }
    }

    function setError_marca() {
        if ($this->error_marca != "") {
            echo $this->aviso_inicio . $this->error_marca . $this->aviso_cierre;
        }
    }

    public function entrada_valida() {
        if ($this->error_nombre_producto == "" && $this->error_cantidad_producto == "" && $this->error_precio_unidad == "" && $this->error_descripcion == "" && $this->error_marca == "") {
            return true;
        } else {
            return false;
        }
    }
}

