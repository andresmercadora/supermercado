<?php
include_once 'RepositorioAdministrador.inc.php';
include_once 'Validador.inc.php';
class ValidadorProductoEditados extends Validador{
     private $cambios_realizados;
    
    private $nombre_producto_original;
    private $cantidad_producto_original;
    private $precio_unidad_original;
    private $descripcion_original;
    private $marca_original;
    
    public function __construct($nombre_producto, $nombre_producto_original, $cantidad_producto, 
            $cantidad_producto_original, $precio_unidad, $precio_unidad_original, $descripcion, 
            $descripcion_original, $marca, $marca_original, $conexion){
        $this -> nombre_producto = $this -> devolver_variable_si_iniciada($nombre_producto);
        $this -> cantidad_producto = $this -> devolver_variable_si_iniciada($cantidad_producto);
        $this -> precio_unidad = $this -> devolver_variable_si_iniciada($precio_unidad);
        $this -> descripcion = $this -> devolver_variable_si_iniciada($descripcion);
        $this -> marca = $this -> devolver_variable_si_iniciada($marca);
        
        $this -> nombre_producto_original = $this -> devolver_variable_si_iniciada($nombre_producto_original);
        $this -> cantidad_producto_original = $this -> devolver_variable_si_iniciada($cantidad_producto_original);
        $this -> precio_unidad_original = $this -> devolver_variable_si_iniciada($precio_unidad_original);
        $this -> descripcion_original = $this -> devolver_variable_si_iniciada($descripcion_original);
        $this -> marca_original = $this -> devolver_variable_si_iniciada($marca_original);
        
        if ($this -> nombre_producto == $this -> nombre_producto_original &&
                $this -> cantidad_producto == $this -> cantidad_producto_original &&
                $this -> precio_unidad == $this -> precio_unidad_original &&
                $this -> descripcion == $this -> descripcion_original &&
                $this -> marca == $this -> marca_original) {
            $this -> cambios_realizados = false;
        }else{
            $this -> cambios_realizados = true;
        }
        if ($this -> cambios_realizados) {
            $this -> aviso_inicio = "<div class='alert alert-danger' rele='alert'>";
            $this -> aviso_cierre = "</div>"; 

            if ($this -> nombre_producto !== $this -> nombre_producto_original) {
                    $this -> error_nombre_producto = $this -> validar_nombre_producto($conexion, $this -> nombre_producto);
            }else{
                    $this -> error_nombre_producto = "";

            }

            if ($this -> cantidad_producto !== $this -> cantidad_producto_original) {
                    $this -> error_cantidad_producto = $this -> validar_cantidad_producto($conexion, $this -> cantidad_producto); 
            }else{
                    $this -> error_cantidad_producto = "";
            }
            
            if ($this -> precio_unidad !== $this -> precio_unidad_original) {
                    $this -> error_precio_unidad = $this -> validar_precio_unidad($conexion, $this -> precio_unidad); 
            }else{
                    $this -> error_precio_unidad = "";
            }
            
            if ($this -> descripcion !== $this -> descripcion_original) {
                    $this -> error_descripcion = $this -> validar_descripcion($conexion, $this -> descripcion);
            }else{
                    $this -> error_descripcion = "";
            }
            if ($this -> marca !== $this -> marca_original) {
                    $this -> error_marca = $this -> validar_marca($conexion, $this -> marca);
            }else{
                    $this -> error_marca = "";
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
    
    function getNombre_producto_original() {
        return $this->nombre_producto_original;
    }

    function getCantidad_producto() {
        return $this->cantidad_producto;
    }

    function getPrecio_unidad_original() {
        return $this->precio_unidad_original;
    }

    function getDescripcion_original() {
        return $this->descripcion_original;
    }

    function getMarca_original() {
        return $this->marca_original;
    }
   
}