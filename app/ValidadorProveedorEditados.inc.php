<?php
include_once 'RepositorioAdministrador.inc.php';
include_once 'ValidadorPv.inc.php';
class ValidadorProveedorEditados extends ValidadorPv{
     private $cambios_realizados;
    
    private $nombre_original;
    private $direccion_original;
    private $telefono_original;
    private $email_original;
    
    public function __construct($nombre, $nombre_original, $direccion, 
            $direccion_original, $telefono, $telefono_original, $email, 
            $email_original, $conexion){
        $this -> nombre = $this -> devolver_variable_si_iniciada($nombre);
        $this -> direccion = $this -> devolver_variable_si_iniciada($direccion);
        $this -> telefono = $this -> devolver_variable_si_iniciada($telefono);
        $this -> email = $this -> devolver_variable_si_iniciada($email);
        
        $this -> nombre_original = $this -> devolver_variable_si_iniciada($nombre_original);
        $this -> direccion_original = $this -> devolver_variable_si_iniciada($direccion_original);
        $this -> telefono_original = $this -> devolver_variable_si_iniciada($telefono_original);
        $this -> email_original = $this -> devolver_variable_si_iniciada($email_original);
        
        if ($this -> nombre == $this -> nombre_original &&
                $this -> direccion == $this -> direccion_original &&
                $this -> telefono == $this -> telefono_original &&
                $this -> email == $this -> email_original) {
            $this -> cambios_realizados = false;
        }else{
            $this -> cambios_realizados = true;
        }
        if ($this -> cambios_realizados) {
            $this -> aviso_inicio = "<div class='alert alert-danger' rele='alert'>";
            $this -> aviso_cierre = "</div>"; 

            if ($this -> nombre !== $this -> nombre_original) {
                    $this -> error_nombre = $this -> validar_nombre($conexion, $this -> nombre);
            }else{
                    $this -> error_nombre = "";

            }

            if ($this -> direccion !== $this -> direccion_original) {
                    $this -> error_direccion = $this -> validar_direccion($conexion, $this -> direccion); 
            }else{
                    $this -> error_direccion = "";
            }
            
            if ($this -> telefono !== $this -> telefono_original) {
                    $this -> error_telefono = $this -> validar_telefono($conexion, $this -> telefono); 
            }else{
                    $this -> error_telefono = "";
            }
            
            if ($this -> email !== $this -> email_original) {
                    $this -> error_email = $this -> validar_email($conexion, $this -> email);
            }else{
                    $this -> error_email = "";
            }
        }
    }
    
    private function devolver_variable_si_iniciada($variable){
        if ($this->variable_iniciada($variable)) {
            return $variable;
        }else{
            return"";
        }
    }
    
    public function hay_cambios(){
        return $this -> cambios_realizados;
    }
    
    function getNombre_original() {
        return $this->nombre_original;
    }

    function getDireccion_original() {
        return $this->direccion_original;
    }

    function getTelefono_original() {
        return $this->telefono_original;
    }

    function getEmail_original() {
        return $this->email_original;
    }


}