<?php
class Administrador{
    
    private $cedula;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $direccion;
    private $telefono;
    private $email;
    private $password;
    
    public function __construct($cedula, $nombre1, $nombre2, $apellido1, $apellido2, $direccion, $telefono, $email, $password){
        $this -> cedula = $cedula;
        $this -> nombre1 = $nombre1;
        $this -> nombre2 = $nombre2;
        $this -> apellido1 = $apellido1;
        $this -> apellido2 = $apellido2;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;
        $this -> email = $email;
        $this -> password = $password;
    }   
    function getCedula() {
        return $this->cedula;
    }

    function getNombre1() {
        return $this->nombre1;
    }

    function getNombre2() {
        return $this->nombre2;
    }

    function getApellido1() {
        return $this->apellido1;
    }

    function getApellido2() {
        return $this->apellido2;
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

    function getPassword() {
        return $this->password;
    }

    function setNombre1($nombre1) {
        $this->nombre1 = $nombre1;
    }

    function setNombre2($nombre2) {
        $this->nombre2 = $nombre2;
    }

    function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
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

    function setPassword($password) {
        $this->password = $password;
    }


}
