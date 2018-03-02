<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Productos.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/ValidadorProducto.inc.php';
include_once 'app/ValidadorProductoEditados.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

Conexion::abrir_conexion();
if (isset($_POST['guardar_cambios_producto'])) {
    $validador = new ValidadorProductoEditados($_POST['nombre_producto'], $_POST['nombre-producto-original'], $_POST['cantidad_producto'], 
            $_POST['cantidad-producto-original'], $_POST['Precio'], $_POST['precio-unidad-original'], htmlspecialchars($_POST['descripcion']), 
            $_POST['descripcion-origin'], $_POST['marca'], $_POST['marca-origin'], Conexion :: obtener_conexion());

    if (!$validador->hay_cambios()) {
        Redireccion::redirigir(RUTA_GESTOR);
    } else {
        if ($validador->entrada_valida()) {
            $cambios_realizados = RepositorioAdministrador :: actualizar_productos(Conexion::obtener_conexion(), $_POST['id-producto'],
                $validador -> getNombre_producto(), $validador -> getCantidad_producto(), $validador -> getPrecio_unidad(),
                $validador -> getDescripcion(), $validador -> getMarca());
                Redireccion::redirigir(RUTA_GESTOR);
        }
    }
}

$titulo = 'Editar productos';
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<br><br><br>
<div class="container colorFondo"><br>
    <div class="rwo">
        <div class="col-md-12">
            <form class="form_nueva_entrada" method="POST" action="<?php echo RUTA_EDITAR_PRODUCTOS; ?>">
                <?php
                if (isset($_POST['editar_entrada'])) {
                    $id_producto = $_POST['id_editar'];
                    $productos_recuperados = RepositorioAdministrador::obtener_productos_por_cod_producto(
                            Conexion::obtener_conexion(), $id_producto);
                    $tipo_producto = $productos_recuperados -> getT_producto();
                    include_once 'plantillas/productos_recuperadas.inc.php';
                    Conexion::cerrar_conexion();
                } else if(isset($_POST['guardar_cambios_producto'])){
                     $id_producto = $_POST['id-producto'];
                     $productos_recuperados = RepositorioAdministrador::obtener_productos_por_cod_producto(
                        Conexion::obtener_conexion(), $id_producto);
                     $tipo_producto = $productos_recuperados -> getT_producto();
                     include_once 'plantillas/productos_recuperadas_valida.inc.php';
                }
                ?>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php
include_once 'plantillas/cierreHTML.inc.php';
?>