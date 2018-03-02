<?php
class Proveedores{
    private $nit;
    private $nombre;
    private $direccion;
    private $telefono;
    private $email;
    private $cedula_adm;
    function __construct($nit, $nombre, $direccion, $telefono, $email, $cedula_adm) {
        $this -> nit = $nit;
        $this -> nombre = $nombre;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;
        $this -> email = $email;
        $this -> cedula_adm = $cedula_adm;
    }
    
    function getNit() {
        return $this->nit;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }
    function getCedula_adm() {
        return $this->cedula_adm;
    }

    function setNit($nit) {
        $this->nit = $nit;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    function setCedula_adm($cedula_adm) {
        $this->cedula_adm = $cedula_adm;
    }

}
