<?php
class Productos{
    private $cod_producto;
    private $nombre_producto;
    private $cantidad_producto;
    private $precio_unidad;
    private $descripcion;
    private $marca;
    private $t_producto;
    private $cedula_adm;
    function __construct($cod_producto, $nombre_producto, $cantidad_producto, $precio_unidad, $descripcion, $marca, $t_producto, $cedula_adm) {
        $this -> cod_producto = $cod_producto;
        $this -> nombre_producto = $nombre_producto;
        $this -> cantidad_producto = $cantidad_producto;
        $this -> precio_unidad = $precio_unidad;
        $this -> descripcion = $descripcion;
        $this -> marca = $marca;
        $this -> t_producto = $t_producto;
        $this -> cedula_adm = $cedula_adm;
    }

    function getCod_producto() {
        return $this->cod_producto;
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

    function getT_producto() {
        return $this->t_producto;
    }

    function getCedula_adm() {
        return $this->cedula_adm;
    }

    function setCod_producto($cod_producto) {
        $this->cod_producto = $cod_producto;
    }

    function setNombre_producto($nombre_producto) {
        $this->nombre_producto = $nombre_producto;
    }

    function setCantidad_producto($cantidad_producto) {
        $this->cantidad_producto = $cantidad_producto;
    }

    function setPrecio_unidad($precio_unidad) {
        $this->precio_unidad = $precio_unidad;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setT_producto($t_producto) {
        $this->t_producto = $t_producto;
    }

    function setCedula_adm($cedula_adm) {
        $this->cedula_adm = $cedula_adm;
    }


}