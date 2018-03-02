<?php
abstract class ValidadorPv{
    protected $aviso_inicio;
    protected $aviso_cierre;
    
    protected $nombre;
    protected $direccion;
    protected $telefono;
    protected $email;
    
    protected $error_nombre;
    protected $error_direccin;
    protected $error_telefono;
    protected $error_email;
    
    function __construct(){
        
    }
     protected function variable_iniciada($variable){
        if (isset($variable) && !empty($variable)){
            return true;
        }else{
            return false;
        }
    }
    protected function validar_nombre($conexion, $nombre){
        if (!$this -> variable_iniciada($nombre)){
            return "Debes ingresar su nombre";
        }else{
            $this -> nombre = $nombre;
        }
        return "";
    }
    protected function validar_direccion($conexion, $direccion){
        if (!$this -> variable_iniciada($direccion)){
            return "Debes ingresar su direccion";
        }else{
            $this -> direccion = $direccion;
        }
        return "";
    }
    protected function validar_telefono($conexion, $telefono){
        if (!$this -> variable_iniciada($telefono)){
            return "Debes ingresar un telefono o celular";
        }else{
            $this -> telefono = $telefono;
        }
        return "";
    }
    protected function validar_email($conexion, $email){
        if (!$this -> variable_iniciada($email)){
            return "Debes ingresar un email";
        }else{
            $this -> email = $email;
        }
        return "";
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

    public function setNombre(){
        if ($this -> nombre !==""){
            echo 'value="'.$this -> nombre.'"';
        }
    }
    public function setDireccion(){
        if ($this -> direccion !==""){
            echo 'value="'.$this -> direccion.'"';
        }
    }
    public function setTelefono(){
        if ($this -> telefono !==""){
            echo 'value="'.$this -> telefono.'"';
        }
    }
    public function setEmail(){
        if ($this -> email !==""){
            echo 'value="'.$this -> email.'"';
        }
    }
    function setError_nombre() {
        if ($this -> error_nombre !==""){
            echo $this -> aviso_inicio.$this ->error_nombre.$this->aviso_cierre;
        }
    }

    function setError_direccion() {
        if ($this -> error_direccion !==""){
            echo $this -> aviso_inicio.$this ->error_direccion.$this->aviso_cierre;
        }
    }

    function setError_telefono() {
        if ($this -> error_telefono !==""){
            echo $this -> aviso_inicio.$this ->error_telefono.$this->aviso_cierre;
        }
    }

    function setError_email() {
        if ($this -> error_email !==""){
            echo $this -> aviso_inicio.$this ->error_email.$this->aviso_cierre;
        }
    }
    public function registro_valido(){
        if ($this->error_nombre === "" && $this->error_direccion===""&&$this->error_telefono==="" && $this->error_email==="") {
            return true;
        } else {
            return false;
        }
    }
}
