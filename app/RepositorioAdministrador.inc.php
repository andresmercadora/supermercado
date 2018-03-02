<?php
class RepositorioAdministrador{
    public static function obtener_usuario_por_email($conexion, $email){
        $email1 = null;
        if (isset($conexion)){
            try {
                include_once 'Administrador.inc.php';
                $sql="SELECT * FROM administrador WHERE email = :email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':email', $email,PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                if (!empty($resultado)){
                    $email1 = new Administrador($resultado['cedula'], $resultado['nombre1'], $resultado['nombre2'], $resultado['apellido1'], $resultado['apellido2'], 
                    	$resultado['direccion'], $resultado['telefono'], $resultado['email'], $resultado['password']);
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
            return $email1;
        } 
    }
    
    public static function obtener_productos_por_cod_producto($conexion, $cod_p){
        $productos = null;
        if (isset($conexion)){
            try {
                $sql="SELECT * FROM producto WHERE cod_producto = :cod_p";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':cod_p', $cod_p,PDO::PARAM_INT);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                if (!empty($resultado)){
                    $productos = new Productos($resultado['cod_producto'], $resultado['nombre_producto'], $resultado['cantidad_producto'], $resultado['precio_unidad'], $resultado['descripcion'], 
                    	$resultado['marca'], $resultado['t_producto'], $resultado['cedula_adm']);
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
            return $productos;
        } 
    } 
    public static function obtener_proveedor_por_cod_producto($conexion, $cod_pv){
        $proveedor = null;
        if (isset($conexion)){
            try {
                $sql="SELECT * FROM proveedor WHERE nit = :cod_pv";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':cod_pv', $cod_pv,PDO::PARAM_INT);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                if (!empty($resultado)){
                    $proveedor = new Proveedores($resultado['nit'], $resultado['nombre'], $resultado['direccion'], $resultado['telefono'],
                            $resultado['email'], $resultado['cedula_adm']);
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
            return $proveedor;
        } 
    } 
    public static function insertar_productos($conexion, $nombre_producto, $cantidad_producto, $precio_unidad, $descripcion, $marca, $t_producto, $cedula_adm) {
        $productos_ingresado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO producto(nombre_producto, cantidad_producto, precio_unidad, descripcion, marca, t_producto, cedula_adm)VALUES"
                        . "(:nombre_producto, :cantidad_producto, :precio_unidad, :descripcion, :marca, :t_producto, :cedula_adm)";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':nombre_producto', $nombre_producto, PDO::PARAM_STR);
                $sentecia->bindParam(':cantidad_producto', $cantidad_producto, PDO::PARAM_INT);
                $sentecia->bindParam(':precio_unidad', $precio_unidad, PDO::PARAM_STR);
                $sentecia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                $sentecia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentecia->bindParam(':t_producto', $t_producto, PDO::PARAM_INT);
                $sentecia->bindParam(':cedula_adm', $cedula_adm, PDO::PARAM_STR);
                $productos_ingresado = $sentecia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $productos_ingresado;
    }
    
    public static function insertar_proveedor($conexion, $nombre, $direccion, $telefono, $email, $cedula_adm) {
        $proveedor_ingresado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO proveedor(nombre, direccion, telefono, email, cedula_adm)VALUES"
                        . "(:nombre, :direccion, :telefono, :email, :cedula_adm)";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentecia->bindParam(':direccion', $direccion, PDO::PARAM_INT);
                $sentecia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentecia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentecia->bindParam(':cedula_adm', $cedula_adm, PDO::PARAM_STR);
                
                $proveedor_ingresado = $sentecia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $proveedor_ingresado;
    }
    
    public static function insertar_producto_proveedor($conexion, $producto_cod, $nit_p) {
        $producto_proveedor_ingresado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO prod_prov(producto_cod, nit_p)VALUES"
                        . "(:producto_cod, :nit_p)";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':producto_cod', $producto_cod, PDO::PARAM_STR);
                $sentecia->bindParam(':nit_p', $nit_p, PDO::PARAM_INT);
                $producto_proveedor_ingresado = $sentecia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $producto_proveedor_ingresado;
    }
    
    public static function nombre_producto_existe($conexion, $nombre_producto) {
        $nombre_producto_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM producto WHERE nombre_producto=:nombre_producto";
                $setencia = $conexion->prepare($sql);
                $setencia->bindParam(':nombre_producto', $nombre_producto, PDO::PARAM_STR);
                $setencia->execute();
                $resultado = $setencia->fetchAll();
                if (count($resultado)) {
                    $nombre_producto_existe = true;
                } else {
                    $nombre_producto_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $nombre_producto_existe;
    }
    
    public static function descripcion_existe($conexion, $descripcion) {
        $descripcion_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM producto WHERE descripcion=:descripcion";
                $setencia = $conexion->prepare($sql);
                $setencia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                $setencia->execute();
                $resultado = $setencia->fetchAll();
                if (count($resultado)) {
                    $descripcion_existe = true;
                } else {
                    $descripcion_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $descripcion_existe;
    }
    
    public static function obtener_productos($conexion, $cedula_adm, $t_producto) {
        $productos_obtenidos = [];
        if (isset($conexion)) {
            try {
                $sql = "SELECT p.cod_producto, p.nombre_producto, p.cantidad_producto, p.precio_unidad, p.descripcion, p.marca, p.t_producto, p.cedula_adm FROM producto p LEFT JOIN administrador a ON p.cedula_adm=a.cedula WHERE p.cedula_adm = :cedula_adm AND p.t_producto=:t_producto";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':cedula_adm', $cedula_adm, PDO::PARAM_STR);
                $sentecia->bindParam(':t_producto', $t_producto, PDO::PARAM_INT);
                $sentecia->execute();
                $resultado = $sentecia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $productos_obtenidos[] = array(
                            new Productos($fila['cod_producto'], $fila['nombre_producto'], 
                                $fila['cantidad_producto'], $fila['precio_unidad'], $fila['descripcion']
                                    , $fila['marca'], $fila['t_producto'], $fila['cedula_adm'])
                        );
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $productos_obtenidos;
    }
    
    public static function obtener_proveedor($conexion, $cedula_adm) {
        $proveedor_obtenidos = [];
        if (isset($conexion)) {
            try {
                include_once 'Proveedores.inc.php';
                $sql = "SELECT p.nit, p.nombre, p.direccion, p.telefono, p.email, p.cedula_adm FROM proveedor p LEFT JOIN administrador a ON p.cedula_adm=a.cedula WHERE p.cedula_adm = :cedula_adm";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':cedula_adm', $cedula_adm, PDO::PARAM_STR);
                $sentecia->execute();
                $resultado = $sentecia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $proveedor_obtenidos[] = array(
                            new Proveedores($fila['nit'], $fila['nombre'], 
                                $fila['direccion'], $fila['telefono'], $fila['email']
                                    , $fila['cedula_adm'])
                        );
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $proveedor_obtenidos;
    }
    public static function eliminar_productos($conexion, $id_productos) {
        if (isset($conexion)) {
            try {
                $conexion->beginTransaction();

                $sql1 = "DELETE FROM producto WHERE cod_producto=:id_productos";
                $setencia1 = $conexion->prepare($sql1);
                $setencia1->bindParam(':id_productos', $id_productos, PDO::PARAM_INT);
                $setencia1->execute();

                $conexion->commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
                $conexion->rollBack();
            }
        }
    }
    public static function eliminar_proveedor($conexion, $nit) {
        if (isset($conexion)) {
            try {
                $conexion->beginTransaction();

                $sql1 = "DELETE FROM proveedor WHERE nit=:nit";
                $setencia1 = $conexion->prepare($sql1);
                $setencia1->bindParam(':nit', $nit, PDO::PARAM_INT);
                $setencia1->execute();

                $conexion->commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
                $conexion->rollBack();
            }
        }
    }
    public static function actualizar_productos($conexion, $id, $nombre_producto, $cantidad_producto, $precio_unidad, $descripcion, $marca) {
        $actualizar_correcta = false;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE producto SET  nombre_producto = :nombre_producto, cantidad_producto = :cantidad_producto, "
                        . "precio_unidad = :precio_unidad, descripcion = :descripcion, marca = :marca WHERE cod_producto = :id";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentecia->bindParam(':nombre_producto', $nombre_producto, PDO::PARAM_STR);
                $sentecia->bindParam(':cantidad_producto', $cantidad_producto, PDO::PARAM_STR);
                $sentecia->bindParam(':precio_unidad', $precio_unidad, PDO::PARAM_STR);
                $sentecia->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                $sentecia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentecia->execute();
                $resultado = $sentecia->fetchAll();

                if (count($resultado)) {
                    $actualizar_correcta = true;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $actualizar_correcta;
    }
    
    public static function actualizar_proveedor($conexion, $nit, $nombre, $direccion, $telefono, $email) {
        $actualizar_correcta = false;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE proveedor SET  nombre = :nombre, direccion = :direccion, "
                        . "telefono = :telefono, email = :email WHERE nit = :nit";
                $sentecia = $conexion->prepare($sql);
                $sentecia->bindParam(':nit', $nit, PDO::PARAM_STR);
                $sentecia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentecia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentecia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentecia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentecia->execute();
                $resultado = $sentecia->fetchAll();

                if (count($resultado)) {
                    $actualizar_correcta = true;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $actualizar_correcta;
    }
}
