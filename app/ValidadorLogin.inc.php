<?php
include_once 'RepositorioAdministrador.inc.php';
class ValidadorLogin{
    private $email;
    private $error;
    public function __construct($email, $clave, $conexion){
        $this -> error = "";
        if (!$this -> variable_iniciada($email) || !$this -> variable_iniciada($clave)){
            $this -> email = null;
            $this -> error = "Debe ingresar un email y la contrace�a";
        }else{
            $this -> email = RepositorioAdministrador::obtener_usuario_por_email($conexion, $email);
            if (is_null($this -> email) || !password_verify($clave, $this -> email -> getPassword())){
                $this -> error = "Datos incorrecto";
            }
        }
    }
    public function variable_iniciada($variable){
        if (isset($variable) && !empty($variable)){
            return true;
        }else{
            return false;
        }
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getError(){
        return  $this -> error;
    }
    public function setError(){
        if($this -> error !==''){
            echo "<div class='alert alert-danger' rele='alert'>";
            echo $this -> error;
            echo "</div>";
        }
    }
}
    