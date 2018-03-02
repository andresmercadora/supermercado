<?php
class ControlSesion{
    public static function iniciar_sesion($cedula, $email){
        if (session_id()==''){
            session_start();
        }
        $_SESSION['cedula'] = $cedula;
        $_SESSION['email'] = $email;
    }
    public static function cerrar_sesion(){
        if (session_id()==''){
            session_start();
        }
        if (isset($_SESSION['cedula'])){
            unset($_SESSION['cedula']);
        }
        if (isset($_SESSION['email'])){
            unset($_SESSION['email']);
        }
    }
    public static function sesion_iniciada(){
        if (session_id()==''){
            session_start();
        }
        if(isset($_SESSION['cedula']) && isset($_SESSION['email'])){
            return true;
        }else{
            return false;
        }
    }
}
